<form action="{{route('follows.store',$user)}}" method="post">
    @csrf
    <button class="bg-green-500 shadow hover:bg-green-700 text-white font-bold py-2 px-2 rounded-full ">
        {{auth()->user()->isFollowing($user)?'Unfollow Me':'Follow Me'}}
    </button>
</form>