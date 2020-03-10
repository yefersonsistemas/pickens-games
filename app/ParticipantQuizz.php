<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantQuizz extends Model
{
    protected $table = 'participant_quizz';

    protected $fillable = [
        'name', 'email', 'phone'
    ];
}
