<h3 class="font-bold text-xl">Following</h3>
<ul>
    @foreach($followeds as $followed)
    <li class="mb-3">
        <div class="flex items-center text-sm">
            <img src="https://i.pravatar.cc/50?u={{$followed->email}}" 
            alt="Avatar" 
            class="rounded-full mr-3 mt-3">
            {{$followed->name}}
        </div>
    </li>
    @endforeach
</ul>