<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //
    //protected $primaryKey = 'idAgency';

    protected $fillable=[

        'id',
        'Riferimento',
        'RagSociale',
        'Telefono',
        'email',
        'Indirizzo',
        'Citta',
        'Provincia',
        'Regione',
        'CAP',

        ];


    //imposto relazione uno-a-molti con agents della Agency
    public function agents(){

        return $this->hasMany('App\Agent', 'agency_id', 'id');


    }

}
