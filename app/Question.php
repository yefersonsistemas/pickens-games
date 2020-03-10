<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';

    protected $fillable = [ 
        'qn','imagename','option1','option2','option3','option4','answer'
    ];
}
