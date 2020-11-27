@extends('layouts.app')

@section('content')
        <x-publish-tweet-panel/>
        <x-timeline :tweets="$tweets"/>
@endsection