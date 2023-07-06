<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    //Cuanto se suba la tabla evaluation, quiten los comentarios
    // public function evaluations(){
    //     return $this->belongsTo(Evaluation::class, 'evaluationId');
    // }
}
