<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function quizz(){
        return $this->belongsTo(Quiz::class, 'quizId');
    }

    public function options(){
        return $this->hasMany(Option::class, 'id');
    }
}
