<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable =[
        'id_user',
        'id_period',
        'id_question',
        'answer'
    ];
}
