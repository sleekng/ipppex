<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpoUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'organization_company',
        'role',
        'exhibitor',
        'ref',
        'first_time',
        'attend_year',
        'tagnumber'

    ];

}
