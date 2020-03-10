<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantTictactoe extends Model
{
    protected $table = 'participant_tictactoe';

    protected $fillable = [
        'name', 'email', 'phone'
    ];
}
