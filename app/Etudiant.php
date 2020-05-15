<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public function Classes()
    {
        return $this->belongsTo('App\Classe');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
