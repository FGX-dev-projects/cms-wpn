<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EasternChapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'surname',
        'email',
        'cell',
        'work_telephone',
        'date_of_birth',
        'race',
        'company_name',
        'postal_address',
        'professional_qualification',
        'position',
        'management_level',
        'other_organisations',
        'core_business',
        'core_focus',
        'invoice_company',
        'invoice_address',
        'code',
        'vat_number',
        'invoice_email',
        'read_constitution',
        'paid',
        'cancel_invoice',
        'member_group_id',
        'account_active',
        'member_invoiced',
        'application_approved',
        'invoice_number'
    ];

    // Add relationships if applicable
    public function memberGroup()
    {
        return $this->belongsTo(MemberGroup::class, 'member_group_id');
    }
}
