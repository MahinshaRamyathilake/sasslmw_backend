<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SLFB_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'address',
    ];
}
