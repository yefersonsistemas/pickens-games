<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RankingHangman extends Model
{
    protected $table = 'ranking_hangman';

    protected $fillable = [ 
        'name','email','phone','score','time'
    ];
}
