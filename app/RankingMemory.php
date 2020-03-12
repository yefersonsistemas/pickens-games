<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RankingMemory extends Model
{
    protected $table = 'ranking_memory';

    protected $fillable = [ 
        'name','email','phone','score','time'
    ];
}
