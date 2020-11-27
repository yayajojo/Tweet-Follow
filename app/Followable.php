<?php

namespace App;


trait Followable
{
    public function toggleFollow(User $user)
    {
        // if (auth()->user()->isFollowing($user)) {
        //     return auth()->user()->unfollow($user);
        // } 
        //     return auth()->user()->follow($user);
        $this->follows()->toggle($user);
        
    }
    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
    public function follows()
    {
        return $this->belongsToMany('App\User', 'follows', 'user_id', 'followed_user_id')->withTimestamps();
    }
    public function isFollowing(User $followed)
    {
        return 
            $this->follows()
            ->where('id',$followed->id)
            ->exists();
    }
}
