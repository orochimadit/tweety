<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable,Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function timeline(){
        //include all of user tweets as well as 
        //the tweets of everyone they follow in descending by order date
        //return Tweet::where('user_id',$this->id)->latest()->get();
        $friends = $this->follows()->pluck('id');
        Return Tweet::whereIn('user_id',$friends)->
                orWhere('user_id',$this->id)->latest()->get();
    }
    public function tweets(){
        return $this->hasMany(Tweet::class)->latest();
    }
    public function getAvatarAttribute(){
        return "https://i.pravatar.cc/200?u=".$this->email;
    }
    public function path($append = ''){
        $path= route('profile',$this->name);
        return $append ? "{$path}/{$append}":$path;
    }
}
