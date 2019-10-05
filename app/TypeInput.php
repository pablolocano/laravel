<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeInput extends Model
{
    //
    protected $fillable = [ 'name' ];

    public function questions()
    {
       return $this->hasMany('App\Questions', 'id_type_input');
    }
}
