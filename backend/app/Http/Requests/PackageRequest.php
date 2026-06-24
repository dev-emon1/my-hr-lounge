<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
            'name'           => 'required|string|max:100',
            'slug'           => 'nullable|string|max:100|unique:packages,slug',
            'description'    => 'nullable|string',
            'price_monthly'  => 'required|numeric|min:0',
            'price_yearly'   => 'required|numeric|min:0',
            'modules'        => 'nullable|array',
            'limits'         => 'nullable|array',
            'integrations'   => 'nullable|array',
            'is_active'      => 'boolean',
            'is_trial'       => 'boolean',
            'trial_period'   => 'nullable|string|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The package name is required.',
            'name.string' => 'The package name must be a string.',
            'name.max' => 'The package name may not be greater than 100 characters.',
            'description.string' => 'The description must be a string.',
            'price_monthly.required' => 'The monthly price is required.',
            'price_monthly.numeric' => 'The monthly price must be a number.',
            'price_monthly.min' => 'The monthly price must be at least 0.',
            'price_yearly.required' => 'The yearly price is required.',
            'price_yearly.numeric' => 'The yearly price must be a number.',
            'price_yearly.min' => 'The yearly price must be at least 0.',
            'modules.array' => 'The modules field must be an array.',
            'limits.array' => 'The limits field must be an array.',
            'integrations.array' => 'The integrations field must be an array.',
            'is_active.boolean' => 'The is_active field must be true or false.',
            'is_trial.boolean' => 'The is_trial field must be true or false.',
            'trial_period.string' => 'The trial period must be a string.',
            'trial_period.max' => 'The trial period may not be greater than 50 characters.',
        ];
    }   
}
