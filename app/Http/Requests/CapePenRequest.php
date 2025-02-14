<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapePenRequest extends FormRequest
{
    /**a
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
            'title' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'cell' => 'required|string|max:25', // Adjust max length based on your needs
            //'work_telephone' => 'nullable|string|max:15',
            //'content' => 'nullable|string',
            'year_of_study' => 'nullable|string',
            'race' => 'nullable|string|max:50',
            'company_name' => 'nullable|string|max:255',
            'postal_address' => 'nullable|string|max:1000',
            'degree' => 'nullable|string|max:255',
            //'position' => 'nullable|string|max:255',
            //'management_level' => 'nullable|string|max:255',
            //'other_organisations' => 'nullable|string|max:1000',
            //'core_business' => 'nullable|string|max:1000',
            'institution' => 'nullable|string|max:1000',
            //'invoice_company' => 'nullable|string|max:255',
            //'invoice_address' => 'nullable|string|max:1000',
            //'code' => 'nullable|string|max:20',
            //'vat_number' => 'nullable|string|max:20',
            //'invoice_email' => 'nullable|email|max:255',
            //'read_constitution' => 'nullable|integer|in:0,1',
            //'member_group_id' => 'nullable|integer|exists:member_groups,id', // Ensure the foreign key exists in `member_groups` table
            //'account_active' => 'nullable|integer|in:0,1',
            'member_invoiced' => 'nullable|integer|in:0,1',
            //'application_approved' => 'nullable|integer|in:0,1',
        ];
    }
}
