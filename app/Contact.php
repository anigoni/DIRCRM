<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $primaryKey = 'idContact';

    public function customer(){

        return $this->belongsTo('App\Customer'); //contatto appartiene a un Customer: rel onetomany

    }
}
