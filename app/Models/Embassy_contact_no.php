<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Embassy_contact_no extends Model
{
    use HasFactory;

    protected $fillable =[
        'embassy_id',
        'contatct_no,'
    ];
}
