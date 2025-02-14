<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InclusionsRequest extends FormRequest
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
            'description' => 'nullable',
            'image_1' => 'nullable|image|mimes:jpg,png,jpeg|dimensions:width=600,height=600',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Project title is required',
            'description.required' => 'Add some content',
        ];
    }
}
