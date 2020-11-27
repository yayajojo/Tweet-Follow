<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //column:liked 0 means disliked;

    protected $fillable= ['user_id','tweet_id','liked','disliked'];

    public function tweet()
    {
     return $this->belongsTo('App\Tweet');
    }
}
