<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family_details_contact_no extends Model
{
    use HasFactory;

    protected $fillable = [
        'fam_member',
        'contact_no',
    ];
}
