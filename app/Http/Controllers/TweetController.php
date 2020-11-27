<?php

namespace App\Http\Controllers;

use App\Likable;
use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    use Likable;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('log');
    }

    public function index()
    {
        $tweets = Auth::user()->timeline();
        $followeds = Auth::user()->follows;
        return view('tweets.index', [
            'tweets' => $tweets,
            'followeds' => $followeds
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'body' => 'required|max:140',
        ]);
        Tweet::create([
            "user_id" => auth()->user()->id,
            "body" => request('body')
        ]);

        return redirect(route('home'));
    }
}
