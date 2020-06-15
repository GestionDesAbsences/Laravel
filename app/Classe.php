<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function Etudiants()
    {
        return $this->hasMany('App\Etudiant');
    }
}
