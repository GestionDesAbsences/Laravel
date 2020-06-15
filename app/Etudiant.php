<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //relation
    public function Classes()
    {
        return $this->belongsTo('App\Classe');
    }
    public function user()
    {
        return $this->belongsTo('App\User' ,  'id_user', 'id');
    }
//crud

        protected $fillable = [
            'name', 'tel'
];


}
