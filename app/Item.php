<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [

    ];

    public function itemKind(){
        return $this->belongsTo('App\ItemKind');
    }

    public function itemType(){
        return $this->belongsTo('App\ItemType');
    }

    public function itemOffer(){
        return $this->belongsTo('App\ItemOffer');
    }
}
