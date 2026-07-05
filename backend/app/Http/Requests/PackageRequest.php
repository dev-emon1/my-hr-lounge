<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PackageRequest extends FormRequest
{
    /*
    |--------------------------------------------------------------------------
    | Authorize
    |--------------------------------------------------------------------------
    */

    public function authorize(): bool
    {
        return true;
    }

    /*
    |--------------------------------------------------------------------------
    | Validation Rules
    |--------------------------------------------------------------------------
    */

  public function rules(): array
{
    $package = $this->route('package');

    $packageId = $package?->id;

    return [

        /*
        |--------------------------------------------------------------------------
        | Basic Information
        |--------------------------------------------------------------------------
        */

        'name' => [
            'required',
            'string',
            'max:100',
        ],

        'slug' => [

            'nullable',

            'string',

            'max:100',

            Rule::unique('packages', 'slug')
                ->ignore($packageId),

        ],

        'description' => [
            'nullable',
            'string',
            'max:5000',
        ],

        /*
        |--------------------------------------------------------------------------
        | Pricing
        |--------------------------------------------------------------------------
        */

        'price_monthly' => [
            'required',
            'numeric',
            'min:0',
        ],

        'price_yearly' => [
            'required',
            'numeric',
            'min:0',
        ],

        /*
        |--------------------------------------------------------------------------
        | Package Builder
        |--------------------------------------------------------------------------
        */

        'modules' => [
            'required',
            'array',
        ],

        'modules.*' => [
            'required',
            'array',
        ],

        'modules.*.enabled' => [
            'required',
            'boolean',
        ],

        'modules.*.features' => [
            'nullable',
            'array',
        ],

        'modules.*.features.*' => [
            'boolean',
        ],

        'limits' => [
            'nullable',
            'array',
        ],

        'integrations' => [
            'nullable',
            'array',
        ],

        /*
        |--------------------------------------------------------------------------
        | Trial
        |--------------------------------------------------------------------------
        */

        'is_trial' => [
            'required',
            'boolean',
        ],

        'trial_period' => [

            Rule::requiredIf(
                $this->boolean('is_trial')
            ),

            'nullable',

            'integer',

            'min:1',

            'max:365',

        ],

        /*
        |--------------------------------------------------------------------------
        | Status
        |--------------------------------------------------------------------------
        */

        'status' => [

            'required',

            Rule::in([

                'draft',

                'active',

                'inactive',

                'archived',

            ]),

        ],

    ];
}

    /*
    |--------------------------------------------------------------------------
    | Custom Messages
    |--------------------------------------------------------------------------
    */

    public function messages(): array
    {
        return [

            /*
            |--------------------------------------------------------------------------
            | Basic Information
            |--------------------------------------------------------------------------
            */

            'name.required' =>
                'Package name is required.',

            'name.max' =>
                'Package name may not exceed 100 characters.',

            'slug.unique' =>
                'Package slug already exists.',

            /*
            |--------------------------------------------------------------------------
            | Pricing
            |--------------------------------------------------------------------------
            */

            'price_monthly.required' =>
                'Monthly price is required.',

            'price_monthly.numeric' =>
                'Monthly price must be numeric.',

            'price_yearly.required' =>
                'Yearly price is required.',

            'price_yearly.numeric' =>
                'Yearly price must be numeric.',

            /*
            |--------------------------------------------------------------------------
            | Builder
            |--------------------------------------------------------------------------
            */

            'modules.required' =>
                'Please select at least one module.',

            'modules.array' =>
                'Modules must be an array.',

            'limits.array' =>
                'Limits must be an array.',

            'integrations.array' =>
                'Integrations must be an array.',

            /*
            |--------------------------------------------------------------------------
            | Trial
            |--------------------------------------------------------------------------
            */

            'trial_period.required' =>
                'Trial period is required.',

            'trial_period.integer' =>
                'Trial period must be an integer.',

            'trial_period.min' =>
                'Trial period must be at least 1 day.',

            'trial_period.max' =>
                'Trial period may not exceed 365 days.',

            /*
            |--------------------------------------------------------------------------
            | Status
            |--------------------------------------------------------------------------
            */

            'status.required' =>
                'Package status is required.',

            'status.in' =>
                'Invalid package status.',

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Prepare Validation
    |--------------------------------------------------------------------------
    */

   protected function prepareForValidation(): void
{
    $this->merge([

        'description' => filled($this->description)
            ? trim($this->description)
            : null,

    ]);
}
}