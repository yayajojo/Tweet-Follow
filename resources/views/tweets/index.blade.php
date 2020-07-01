@extends('layouts.app')

@section('content')
        @include('_publish-tweet-panel')
        @foreach($tweets as $tweet)
        @include('_tweet')
        @endforeach
@endsection