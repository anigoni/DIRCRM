<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //

    //protected $primaryKey = 'idAgent';

    protected $fillable=[

        'id',
        'agency_id',
        'is_active',
        'Nome',
        'Cognome',
        'Telefono',
        'Cellulare',
        'email'

    ];


    public function agency(){

        return $this->belongsTo('App\Agency'); //un agent appartiene a una agenzia: rel onetomany

    }
}
