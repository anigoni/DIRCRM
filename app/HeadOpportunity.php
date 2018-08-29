<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeadOpportunity extends Model
{
    //

    protected $primaryKey = 'idHeadOpportunity';

    public function customer(){

        return $this->belongsTo('App\Agency'); //offerta appartiene a un customer: rel onetomany

    }

    public function agent(){

        return $this->belongsTo('App\Agent'); //offerta appartiene a un agent: rel onetomany

    }

    public function contact(){

        return $this->belongsTo('App\Contact'); //offerta appartiene a un contact: rel onetomany

    }

    public function state(){

        return $this->belongsTo('App\State'); //offerta ha uno stato (Sospesa, Vinta,...): rel onetomany

    }
}
