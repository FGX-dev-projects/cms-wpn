<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembersCrudRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'role_id' => 'required',
            //'file' => 'image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=396,min_height=353,max_width=396,max_height=353',
            'file' => 'image|mimes:jpg,png,jpeg',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Country name is required',
            'name.role_id' => 'Please select member role'
        ];
    }
}
