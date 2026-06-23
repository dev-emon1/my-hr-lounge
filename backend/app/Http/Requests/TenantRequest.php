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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
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
            'password' => 'required|string|min:8|max:255|confirmed',
            'total_employees' => 'nullable|integer',
            'employee_count' => 'nullable|integer',
            'settings' => 'nullable|array',
            'timezone' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:10',
            'domain' => 'nullable|string|max:255',
            'package_id' => 'required|uuid|exists:packages,id',
            'billing_cycle' => 'required|string|in:monthly,yearly',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|string|in:pending,trial,active,suspended,cancelled,expired',
            'current_period_start' => 'nullable|date',
            'current_period_end' => 'nullable|date|after_or_equal:current_period_start',
        ];
    }

    public function messages(): array
    {
        return [
            'company_name.required' => 'Company name is required',
            'owner_name.required' => 'Owner name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters',
            'password.confirmed' => 'Password confirmation does not match',
            'client_type.required' => 'Client type is required',
            'package_id.required' => 'Package selection is required',
            'package_id.exists' => 'Selected package does not exist',
        ];
    }
}
