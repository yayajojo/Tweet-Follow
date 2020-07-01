<div class="border border-gray-300 rounded-lg">
    <div class="flex p-4">
        <div class="mx-3 my-2 flex-shrink-0">
            <img src="{{$tweet->user->getAvatar()}}" alt="Avatar" class="rounded-full mr-1 mt-3 ">
        </div>
        <div>
            <h5 class="font-bold my-4">{{$tweet->user->name}}</h5>
            <p class="text-sm">
             {{$tweet->body}}
            </p>
        </div>
    </div>
</div>
