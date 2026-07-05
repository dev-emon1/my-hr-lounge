<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TenantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation Rules
     */
    public function rules(): array
    {
        return [

            'company_name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',

            'client_type' => 'required|string|max:50',

            'address' => 'nullable|string|max:500',
            'phone' => 'nullable|string|max:20',

            'email' => 'required|email|max:255',

            'password' => 'required|string|min:8|confirmed',

            'total_employees' => 'nullable|integer|min:0',
            'employee_count' => 'nullable|integer|min:0',

            'timezone' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:10',
            'domain' => 'nullable|string|max:255',

            'settings' => 'nullable|array',

            'package_id' => 'required|uuid|exists:packages,id',

            'billing_cycle' => 'required|in:monthly,yearly',

            'status' => 'required|in:pending,trial,active,suspended,cancelled,expired',

        ];
    }

    /**
     * Custom Messages
     */
    public function messages(): array
    {
        return [

            'company_name.required' => 'Company name is required.',

            'owner_name.required' => 'Owner name is required.',

            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email.',

            'password.required' => 'Password is required.',
            'password.confirmed' => 'Password confirmation does not match.',

            'package_id.required' => 'Package is required.',
            'package_id.exists' => 'Selected package does not exist.',

        ];
    }
}