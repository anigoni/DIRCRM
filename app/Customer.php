<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    //protected $primaryKey = 'idCustomer';

    protected $fillable=[

        'id',
        'RagSociale',
        'Indirizzo',
        'Citta',
        'Provincia',
        'Regione',
        'Telefono',
        'email',
        'website',
        'is_active',
        'is_potential',
        'is_lead',
        'CAP'

    ];

    //imposto relazione uno-a-molti con Contacts dei Customer
    public function contacts(){

        return $this->hasMany('App\Contact');


    }
}
