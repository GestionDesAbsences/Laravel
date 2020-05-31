<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    public function Seances()
    {
        return $this->hasMany('App\Seance');
    }
    public function users()
    {
        return $this->belongsTo('App\User' ,  'id_user', 'id');
    }
}
