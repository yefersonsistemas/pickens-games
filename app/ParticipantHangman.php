<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantHangman extends Model
{
    protected $table = 'participant_hangman';

    protected $fillable = [
        'name', 'email', 'phone'
    ];
}
