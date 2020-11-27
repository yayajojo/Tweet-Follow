<div class="flex p-6">
            <form class="mx-3" action="{{route('tweets.like',$tweet)}}" method="post">
               @csrf 
               <button type="submit">
                    <svg class="w-5" viewBox="0 0 20 20">
                        <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM6.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm7 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm2.16 3a6 6 0 0 1-11.32 0h11.32z">

                        </path>
                    </svg>
                </button>
            </form>
            <span>
            {{$tweet->getLikeSum()['liked']}} 
            </span>
            <form class="mx-3" action="{{route('tweets.dislike',$tweet)}}" method="post">
                @csrf
                <button type="submit">
                    <svg class="w-5" viewBox="0 0 20 20">
                        <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM6.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm7 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm2.16 6a6 6 0 0 0-11.32 0h11.32z"></path>
                    </svg>
                </button>
            </form>
            <span>
            {{$tweet->getLikeSum()['disliked']}} 
            </span>
        </div>