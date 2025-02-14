<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillingCrudRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'company_information' => 'required',
            'bank_details' => 'required',
            'email' => 'required|email'
        ];
    }
    public function messages()
    {
        return [
            'company_information.required' => 'Company information is required',
            'bank_details.required' => 'Baking details are required'
        ];
    }
}
