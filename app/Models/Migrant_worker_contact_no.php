<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Migrant_worker_contact_no extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'contact_no',
    ];
}
