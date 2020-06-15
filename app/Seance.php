<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{

    public function Prof()
    {
        return $this->belongsTo('App\Prof');
    }
    public function Absences()
    {
        return $this->belongsTo('App\Absence');
    }
}

