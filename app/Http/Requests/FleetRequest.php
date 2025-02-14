<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FleetRequest extends FormRequest
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
            'group' => 'required',
            'type_id' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|dimensions:width=480,height:280',
        ];
    }
    public function messages()
    {
        return [
           
            'group.required' => 'Group is required',
            'type_id.required' => 'Vehicle is required',
       ];
    }
}
