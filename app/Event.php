<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['id'];
    //protected $dates = ['starts_at']; // transforme les attributs passés dans le tableau en attribut de type Carbon ( DateTime custom)
    protected $casts = [ // transforme les attributs (key) en types donnés (value)
    	'starts_at' => 'dateTime'
    ];

    public function isFree()
    {
    	return $this->price == 0;
    }
}
