@extends('layouts.app')

@section('content')
<img class="rounded-lg mb-2" src="/images/heart-tree.jpg" alt="tree-heart">
<div class="flex justify-between items-center">
    <div>
        <h2 class="font-bold text-2xl"> {{$user->name}}</h2>
        <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
    </div>

    <div>
        <a href="" class="bg-blue-500 shadow hover:bg-blue-700 text-black font-bold py-2 px-2 rounded-full mr-2">Edit Profile</a>
        <a href="" class="bg-green-500 shadow hover:bg-green-700 text-white font-bold py-2 px-2 rounded-full ">Follow Me</a>
    </div>
</div>
<img style="margin:-150px 0 20px 200px" class="rounded-full" src="{{$user->getAvatar()}}" alt="avatar">
<p class="text-sm mb-3">
    My name is Maciek, and I’m a career writer.
    My job is to provide job seekers with expert
    advice on career-related topics. I read a lot 
    and consult recruiting professionals so you 
    don’t have to. I show you how to hack the recruitment process, create a job-winning resume, ace the job interview, 
    and... introduce yourself, among others.
</p>
@include('_timeline')
@endsection