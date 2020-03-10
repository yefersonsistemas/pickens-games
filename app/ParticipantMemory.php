<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantMemory extends Model
{
    protected $table = 'participant_memory';

    protected $fillable = [
        'name', 'email', 'phone'
    ];
}
