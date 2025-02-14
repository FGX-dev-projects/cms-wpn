<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'title' => 'required',
            'address' => 'required',
            'province_id' => 'required',
            'city' => 'required',
            'large_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ];
    }
    public function messages()
    {
        return [
           
            'title.required' => 'Title is required',
            'content.required' => 'Content is required',
       ];
    }
}
