<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsCrudRequest extends FormRequest
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
            //'subtitle' => 'required',
            'content' => 'required',
            // 'small_image' => 'nullable|image|mimes:jpg,png,jpeg|dimensions:width=600,height:600',
            // 'large_image' => 'nullable|image|mimes:jpg,png,jpeg|dimensions:width=1366,height:768', 
            // 'author_icon' => 'nullable|image|mimes:jpg,png,jpeg',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            //'subtitle.required' => 'Article short description is required',
            'content.required' => 'Content is required',
       ];
    }
}
