<?php

namespace App\Http\Controllers\Api\V1\SuperAdmin;

use App\DTOs\Package\PackageBuilderData;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Http\Resources\LightPackageResource;
use App\Http\Resources\PackageResource;
use App\Models\Central\Package;
use App\Services\Package\PackageBuilderService;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PackageController extends Controller
{
    use ApiResponse;

    public function __construct(
        protected PackageBuilderService $packageBuilderService,
    ) {}

    /*
    |--------------------------------------------------------------------------
    | List Packages
    |--------------------------------------------------------------------------
    */

    public function index(
        Request $request
    ): JsonResponse {

        $perPage = $request->integer('per_page', 20);

        $cacheKey = 'packages:index:' . md5(json_encode([

            'page' => $request->integer('page', 1),

            'per_page' => $perPage,

            'search' => $request->string('search'),

            'status' => $request->string('status'),

            'is_trial' => $request->boolean('is_trial'),

            'with_modules' => $request->boolean('with_modules'),

            'with_limits' => $request->boolean('with_limits'),

            'with_integrations' => $request->boolean('with_integrations'),

            'with_description' => $request->boolean('with_description'),

        ]));

        $packages = Cache::remember(

            $cacheKey,

            now()->addMinutes(10),

            function () use (
                $request,
                $perPage
            ) {

                $query = Package::query()
                    ->latest();

                /*
                |--------------------------------------------------------------------------
                | Search
                |--------------------------------------------------------------------------
                */

                if ($request->filled('search')) {

                    $query->search(
                        $request->search
                    );
                }

                /*
                |--------------------------------------------------------------------------
                | Filters
                |--------------------------------------------------------------------------
                */

                if ($request->filled('status')) {

                    $query->where(
                        'status',
                        $request->string('status')
                    );
                }

                if ($request->filled('is_trial')) {

                    $query->where(
                        'is_trial',
                        $request->boolean('is_trial')
                    );
                }

                /*
                |--------------------------------------------------------------------------
                | Select Fields
                |--------------------------------------------------------------------------
                */

                $select = [

                    'id',

                    'name',

                    'slug',

                    'price_monthly',

                    'price_yearly',

                    'is_trial',

                    'status',

                    'created_at',

                ];

                if ($request->boolean('with_description')) {
                    $select[] = 'description';
                }

                if ($request->boolean('with_modules')) {
                    $select[] = 'modules';
                }

                if ($request->boolean('with_limits')) {
                    $select[] = 'limits';
                }

                if ($request->boolean('with_integrations')) {
                    $select[] = 'integrations';
                }

                if ($request->boolean('with_registry_snapshot')) {
                    $select[] = 'registry_snapshot';
                }

                $query->select($select);

                return $query->paginate($perPage);
            }

        );

        return $this->success(

            LightPackageResource::collection(
                $packages
            ),

            'Packages retrieved successfully.'

        );
    }

    /*
    |--------------------------------------------------------------------------
    | Create Package
    |--------------------------------------------------------------------------
    */

    public function store(
        PackageRequest $request
    ): JsonResponse {

        $package = $this->packageBuilderService->create(

            PackageBuilderData::fromArray(
                $request->validated()
            )

        );

        return $this->created(

            new PackageResource(
                $package
            ),

            'Package created successfully.'

        );
    }

    /*
    |--------------------------------------------------------------------------
    | Preview Package
    |--------------------------------------------------------------------------
    */

    public function preview(
        PackageRequest $request
    ): JsonResponse {

        $preview = $this->packageBuilderService->preview(

            PackageBuilderData::fromArray(
                $request->validated()
            )

        );

        return $this->success(

            $preview,

            'Package preview generated successfully.'

        );
    }
        /*
    |--------------------------------------------------------------------------
    | Show Package
    |--------------------------------------------------------------------------
    */

    public function show(
        Package $package
    ): JsonResponse {

        return $this->success(

            new PackageResource(
                $package
            ),

            'Package retrieved successfully.'

        );
    }

    /*
    |--------------------------------------------------------------------------
    | Update Package
    |--------------------------------------------------------------------------
    */

    public function update(
        PackageRequest $request,
        Package $package
    ): JsonResponse {

        $package = $this->packageBuilderService->update(

            $package,

            PackageBuilderData::fromArray(
                $request->validated()
            )

        );

        return $this->success(

            new PackageResource(
                $package
            ),

            'Package updated successfully.'

        );
    }

    /*
    |--------------------------------------------------------------------------
    | Delete Package
    |--------------------------------------------------------------------------
    */

    public function destroy(
        Package $package
    ): JsonResponse {

        if ($package->tenants()->exists()) {

            return $this->error(

                'Cannot delete package because it is assigned to one or more tenants.',

                'PACKAGE_IN_USE',

                409

            );
        }

        $package->delete();

        $this->clearPackageCache();

        /*
        |--------------------------------------------------------------------------
        | TODO
        |--------------------------------------------------------------------------
        |
        | Dispatch PackageDeleted Event
        | Audit Log
        | Activity Log
        |
        */

        return $this->success(

            null,

            'Package deleted successfully.'

        );
    }

    /*
    |--------------------------------------------------------------------------
    | Change Package Status
    |--------------------------------------------------------------------------
    */

    public function status(
        Request $request,
        Package $package
    ): JsonResponse {

        $validated = $request->validate([

            'status' => [

                'required',

                'in:draft,active,inactive,archived',

            ],

        ]);

        $package->update([

            'status' => $validated['status'],

        ]);

        $this->clearPackageCache();

        /*
        |--------------------------------------------------------------------------
        | TODO
        |--------------------------------------------------------------------------
        |
        | Dispatch PackageStatusChanged Event
        | Audit Log
        |
        */

        return $this->success(

            new PackageResource(
                $package->fresh()
            ),

            'Package status updated successfully.'

        );
    }

    /*
    |--------------------------------------------------------------------------
    | Clear Package Cache
    |--------------------------------------------------------------------------
    */

    protected function clearPackageCache(): void
    {
        Cache::flush();

        /*
        |--------------------------------------------------------------------------
        | Future
        |--------------------------------------------------------------------------
        |
        | Cache::tags(['packages'])->flush();
        |
        */
    }
}