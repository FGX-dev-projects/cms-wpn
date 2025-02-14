<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Johannesburg extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'surname',
        'email',
        'cell',
        'nationality',
        'year_of_study',
        'institution',
        'degree',
        'member_group_id',
        'account_active',
        'member_invoiced',
        'application_approved',
        'invoice_number'
    ];

    public function memberGroup()
    {
        return $this->belongsTo(MemberGroup::class, 'member_group_id');
    }
}
