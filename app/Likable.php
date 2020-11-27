<?php

namespace App;

use Illuminate\Support\Facades\Auth;


trait Likable
{

    public function like(Tweet $tweet)
    {
       
        if (!$this->likePressed($tweet, Auth::id())) {
            $tweet->likes()
                ->create(
                    ['user_id' => Auth::id(), 'liked' => true]
                );
        }
        if ($this->likedBy($tweet, Auth::id())) {
            $tweet->likes()->where(['user_id' => Auth::id()])->update(['liked' => false]);
        } else {
            $tweet->likes()->where(['user_id' => Auth::id()])->update(['liked' => true, 'disliked' => false]);
        }

        return back();
    }
    public function dislike(Tweet $tweet)
    {
        if (!$this->likePressed($tweet, Auth::id())) {
            $tweet->likes()
                ->create(
                    ['user_id' => Auth::id(), 'disliked' => true]
                );
        }
        if ($this->dislikedBy($tweet, Auth::id())) {
            $tweet->likes()->where(['user_id' => Auth::id()])->update(['disliked' => false]);
        } else {
            $tweet->likes()->where(['user_id' => Auth::id()])->update(['disliked' => true, 'liked' => false]);
        }
        return back();
    }
    
    protected function likePressed(Tweet $tweet, $user)
    {
        return $tweet->likes()->where(['user_id' => $user])->exists();
    }
    protected function likedBy(Tweet $tweet, $user)
    {
        return $tweet->likes()->where(['user_id' => $user, 'liked' => true])->exists();
    }
    protected function dislikedBy(Tweet $tweet, $user)
    {
        return $tweet->likes()->where(['user_id' => $user, 'disliked' => true])->exists();
    }
}
