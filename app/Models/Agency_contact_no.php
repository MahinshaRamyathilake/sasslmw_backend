<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency_contact_no extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_id',
        'contact_no',
    ];
}
