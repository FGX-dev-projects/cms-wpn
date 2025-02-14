<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryCrudRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required',
            'images.*' => 'required|mimes:jpeg,jpg,png|max:2048' // validates each image
        ];
    }
}
