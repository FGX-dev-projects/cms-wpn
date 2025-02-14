<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected  $fillable = ['company_information', 'bank_details', 'email', 'tax', 'logo', 'year'];
}
