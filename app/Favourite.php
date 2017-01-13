<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Favourite extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'item_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function users(){
        /*$user =  User::find(Auth::user()->id);
        return view('user.favourites',['products' => $user->favourites ]);
        return $this->belongsToMany('App\Favouri', 'favourites');*/
    }

}
