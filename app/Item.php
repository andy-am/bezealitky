<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [

    ];

    public function itemKind(){
        return $this->hasOne('App\ItemKind','id');
    }

    public function itemType(){
        return $this->hasOne('App\ItemType','id');
    }

    public function itemOffer(){
        return $this->hasOne('App\ItemOffer','id');
    }
}
