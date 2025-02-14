<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'link' => 'sometimes|nullable|url',
            'description' => 'nullable',
            //'file' => 'image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=269,min_height=147,max_width=300,max_height=269',
            'image' => 'image|mimes:jpg,png,jpeg'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Name is required'
        ];
    }
}
