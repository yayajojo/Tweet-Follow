<div class="p-7 border border-green-400 rounded-lg mb-6">
    <form action="/tweets" method="POST">
    @csrf
        <textarea name="body" class="w-full p-4" placeholder="What do you want to tweet today?"></textarea>
        <hr class="my-2">
        <footer class="flex justify-between px-4 py-3">
            <img style="width:60px" src="{{auth()->user()->getAvatar()}}" alt="Avatar" class="rounded-full mr-3 mt-3">
            <button class="bg-green-500 shadow hover:bg-green-700 text-white font-bold py-2 px-2 rounded-lg" type="submit">Tweet me!!</button>
        </footer>
    </form>
    @error('body')
    <p class="text-sm m-2 text-red-700">{{$message}}</p>
    @enderror
</div>