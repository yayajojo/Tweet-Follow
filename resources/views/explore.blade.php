@extends('layouts.app')

@section('content')
@foreach ($users as $user)
<div class="my-5 mx-1">  
    <a class="flex items-center w-1/2" href="{{route('profiles.show',$user)}}">
        <img class="w-1/6 rounded-full mr-1 mt-3 " src="{{$user->getAvatar()}}" alt="{{$user->username}}">
        <div>
        <p> @ {{$user->username}}</p>
    </div>
    </a>
</div>
@endforeach
<div class="font-bold text-green-900 flex flex-row items-center">
{{ $users->links() }}
</div>

@endsection