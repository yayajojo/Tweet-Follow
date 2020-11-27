<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tweet extends Model
{
    
    protected $fillable = ['user_id','body'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    public function getLikeSum()
    {
        $likes = DB::table('likes')
            ->select('tweet_id',DB::raw('SUM(liked) as liked'),DB::raw('SUM(disliked) as disliked'))
            ->groupBy('tweet_id')
            ->where('tweet_id',$this->id)
            ->get()
            ->toArray();
            if($likes === []){
              return ['liked'=>0,'disliked'=>0];
            }
            return (array)$likes[0];
        
    }

}
