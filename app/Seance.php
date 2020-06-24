<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $primaryKey = 'id_seance';
    public function Prof()
    {
        return $this->belongsTo('App\Prof');
    }
    public function Absences()
    {
        return $this->hasMany('App\Absence');
    }
}

