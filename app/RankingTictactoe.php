<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RankingTictactoe extends Model
{
    protected $table = 'ranking_tictactoe';

    protected $fillable = [ 
        'name','email','phone','score','time'
    ];
}
