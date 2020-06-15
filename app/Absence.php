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
        return $this->hasOne('App\Prof');
    }

    public function Seances()
    {
        return $this->hasMany('App\Seance');
    }
}
