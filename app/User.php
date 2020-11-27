<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name', 'email', 'password',
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
    // tweets
    public function tweets()
    {
        return $this->hasMany('App\Tweet')->latest();
    }

    public function timeline()
    {
        // include the user's and followeds' tweets

        $followed_ids = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $followed_ids)->orWhere('user_id', $this->id)->latest()->paginate(5);
    }
    // profile
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    // path to avatar 
    public function getAvatar()
    {
        return asset($this->profile->avatar);
    }
}
