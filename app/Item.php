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

    public function itemWindow(){
        return $this->belongsTo('App\ItemWindow');
    }

    public function itemOffer(){
        return $this->belongsTo('App\ItemOffer');
    }

    public function itemThing(){
        return $this->belongsTo('App\ItemThing');
    }

    public function itemConstruction(){
        return $this->belongsTo('App\ItemConstruction');
    }

    public function itemHeating(){
        return $this->belongsTo('App\ConstructionType');
    }


}
