<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'country_region',
        'state',
        'booking',
        'stand',
        'phone_number',
        'q_about',
        'tagnumber',
        'question',
        'email',
    ];
}