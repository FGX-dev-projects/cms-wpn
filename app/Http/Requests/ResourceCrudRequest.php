<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResourceCrudRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'pdf' => 'required|mimes:pdf,doc,docx|max:256000', // Allow pdf, doc, docx
        ];
    }

    /**
     * Custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'The title field is required.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'pdf.required' => 'The PDF/Word document is required.',
            'pdf.mimes' => 'The uploaded file must be a PDF or Word document.',
            'pdf.max' => 'The file size must not exceed 256 MB.',
        ];
    }
}
