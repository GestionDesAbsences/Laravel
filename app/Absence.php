<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    //
    public $timestamps = false;


    protected $fillable = [
        'id_prof', 'retard', 'absences', 'id_seance'
    ];

    public function Prof() {
        return $this->belongsTo('App\Prof','id_prof');
    }

    public function Seances()
    {
        return $this->belongsTo('App\Seance','id_seance');
    }
}
