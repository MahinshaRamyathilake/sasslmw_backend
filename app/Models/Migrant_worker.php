<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Migrant_worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'full_name',
        'name_with_init',
        'country',
        'workplace',
        'workplace_address',
        'address_in_sl',
        'no_of_dependants',
        'dob',
        'age',
        'visa_no',
        'passport_no',
        'passport_exp_date',
        'agency',
    ];
}
