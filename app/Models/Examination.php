<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;

    public function results()
    {
        return $this->hasMany(Result::class, 'examination_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'examination_id');
    }
}
