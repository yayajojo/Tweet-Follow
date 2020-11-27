<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
<h3 class="font-bold text-xl">Following</h3>
<ul>
    @forelse($followeds as $followed)
    <li class="mb-3">
        <div >
            <a class="flex items-center text-sm" href="{{route('profiles.show',$followed)}}">
            <img class="w-1/6 rounded-full mr-3 mt-3" src="{{$followed->getAvatar()}}" 
            alt="Avatar" 
            class="rounded-full mr-3 mt-3">
            {{$followed->name}}
            </a>
        </div>
    </li>
    @empty
    <li class="mb-3">No followees yet</li>
    @endforelse
</ul>
</div>