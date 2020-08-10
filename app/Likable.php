<?php
namespace App;

trait likable{
    public function likePressed($user)
    {
        return $this->likes()->where(['user_id' => $user])->exists();
    }
    public function likedBy($user)
    {
        return $this->likes()->where(['user_id' => $user, 'liked' => true])->exists();
    }
    public function dislikedBy($user)
    {
        return $this->likes()->where(['user_id' => $user, 'disliked' => true])->exists();
    }
}
