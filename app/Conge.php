<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    protected $table = 'conge';

    protected $fillable = [
        'raison',
        'approuve',
        'id_prof',
        'start',
        'end',
    ];

    public $timestamps = false;
}
