<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'role',
        'firstname',
        'middlename',
        'surname',
        'email',
        'contact',
        'photo',
        'password'
        // other fillable attributes
    ];
}
