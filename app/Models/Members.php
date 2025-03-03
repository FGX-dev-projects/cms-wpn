<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
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
        'invoice_date',
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

    // Automatically generate invoice number
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($member) {
    //         if (empty($member->invoice_number)) {
    //             $member->invoice_number = self::generateInvoiceNumber();
    //         }
    //     });
    // }

    //  /**
    //  * Generate a unique invoice number in the format: YYYYMMDD-RANDOM
    //  * Example: 20241129-56789
    //  */
    // private static function generateInvoiceNumber()
    // {
    //     // Get the current date in YYYYMMDD format
    //     $datePrefix = now()->format('Ymd');

    //     // Find the last invoice number for the current date
    //     $lastInvoice = self::where('invoice_number', 'LIKE', "{$datePrefix}-%")
    //         ->orderBy('invoice_number', 'desc')
    //         ->first();

    //     if ($lastInvoice) {
    //         // Extract the sequential part and increment it
    //         $lastNumber = (int) substr($lastInvoice->invoice_number, -2);
    //         $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
    //     } else {
    //         // Start with 01 if no invoices exist for the current date
    //         $newNumber = '01';
    //     }

    //     // Combine date prefix with the new sequential number
    //     return "{$datePrefix}-{$newNumber}";
    // }
}


