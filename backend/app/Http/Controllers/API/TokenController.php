<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TokenStoreRequest;
use App\Http\Resources\PersonalAccessTokenResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Get all active tokens of current user
     */
    public function index(Request $request): JsonResponse
    {
        $tokens = $request->user()
            ->tokens()
            ->whereNull('expires_at')
            ->orWhere('expires_at', '>', now())
            ->latest()
            ->get();

        return PersonalAccessTokenResource::collection($tokens);
    }

    /**
     * Create new token
     */
    public function store(TokenStoreRequest $request): JsonResponse
    {
        $user = $request->user();

        $abilities = $request->abilities ?? ['*'];

        $token = $user->createToken(
            $request->name,
            $abilities,
            $request->expires_at ? now()->parse($request->expires_at) : null
        );

        return response()->json([
            'message' => 'Token created successfully',
            'token'   => $token->plainTextToken,
            'token_id'=> $token->accessToken->id,
            'name'    => $request->name,
            'abilities' => $abilities,
        ], 201);
    }

    /**
     * Revoke a specific token
     */
    public function destroy(Request $request, string $tokenId): JsonResponse
    {
        $revoked = $request->user()
            ->tokens()
            ->where('id', $tokenId)
            ->delete();

        if (!$revoked) {
            return response()->json(['error' => 'Token not found'], 404);
        }

        return response()->json(['message' => 'Token revoked successfully']);
    }

    /**
     * Revoke all tokens (Multi-device logout)
     */
    public function revokeAll(Request $request): JsonResponse
    {
        $request->user()->revokeAllTokens();

        return response()->json([
            'message' => 'All tokens revoked successfully'
        ]);
    }
}