<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RankingQuizz extends Model
{
    protected $table = 'ranking_quizz';

    protected $fillable = [ 
        'name','email','phone','score','time'
    ];
}
