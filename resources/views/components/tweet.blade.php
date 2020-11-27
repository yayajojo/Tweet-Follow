<div class="border border-gray-300 rounded-md">
    <div class="flex p-4">
        <div class="mx-3 my-2 flex-shrink-0">
            <a href="{{route('profiles.show',$tweet->user)}}">
                <img style="width:60px;" src="{{$tweet->user->getAvatar()}}" alt="Avatar" class="rounded-full mr-1 mt-3 ">
            </a>
        </div>
        <div>
            <a href="{{route('profiles.show',$tweet->user)}}">
                <h5 class="font-bold my-4">{{$tweet->user->name}}</h5>
            </a>
            <p class="text-sm">
                {{$tweet->body}}
            </p>
        </div>
    </div>
    <x-like-dislike-icons :tweet="$tweet" />
</div>