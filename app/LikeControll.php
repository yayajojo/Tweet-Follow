<?php

namespace App;

use Illuminate\Support\Facades\Auth;


trait LikeControll
{

    public function like(Tweet $tweet)
    {
       
        if (!$tweet->likePressed(Auth::id())) {
            $tweet->likes()
                ->create(
                    ['user_id' => Auth::id(), 'liked' => true]
                );
        }
        if ($tweet->likedBy(Auth::id())) {
            $tweet->likes()->where(['user_id' => Auth::id()])->update(['liked' => false]);
        } else {
            $tweet->likes()->where(['user_id' => Auth::id()])->update(['liked' => true, 'disliked' => false]);
        }

        return back();
    }
    public function dislike(Tweet $tweet)
    {
        if (!$tweet->likePressed(Auth::id())) {
            $tweet->likes()
                ->create(
                    ['user_id' => Auth::id(), 'disliked' => true]
                );
        }
        if ($tweet->dislikedBy(Auth::id())) {
            $tweet->likes()->where(['user_id' => Auth::id()])->update(['disliked' => false]);
        } else {
            $tweet->likes()->where(['user_id' => Auth::id()])->update(['disliked' => true, 'liked' => false]);
        }
        return back();
    }
    
    
}
