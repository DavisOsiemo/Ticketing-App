<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $guarded = ['id'];

    public function user(){
      //Tickets belong to users. The model also allows you to access any ticket's data e.g title, content e.t.c
      return $this->belongsTo('App\User');
    }
}
