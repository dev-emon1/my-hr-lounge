<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Override;

class ClientStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => 'required|string|max:255',
            'subdomain'    => 'required|string|unique:clients,subdomain|alpha_dash',
            'domain'       => 'nullable|url|unique:clients,domain',
            'package_id'   => 'required|exists:packages,id',
            'status'       => 'nullable|in:active,trial,suspended',
        ];
    }

    public function messages(): array
    {
        return [
            //
        ];
    }
}
