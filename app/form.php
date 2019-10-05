<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    //
    public function questions(){
        return $this->hasMany('App\Question', 'id_form');
    }
}
