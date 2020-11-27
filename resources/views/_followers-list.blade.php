<h3 class="font-bold text-xl">Following</h3>
<ul>
    @foreach($followeds as $followed)
    <li class="mb-3">
        <div >
            <a class="flex items-center text-sm" href="{{route('profiles.show',$followed)}}">
            <img src="https://i.pravatar.cc/50?u={{$followed->email}}" 
            alt="Avatar" 
            class="rounded-full mr-3 mt-3">
            {{$followed->name}}
            </a>
        </div>
    </li>
    @endforeach
</ul>