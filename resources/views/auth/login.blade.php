@extends('layouts.master')

@section('added_content')


<div class="flex container mx-auto">
    <ul>
        <li><a href="{{route('register')}}" class="font-bold text-lg mb-4 block">Register</a></li>
    </ul>
</div>
<div class="flex">
    <div class="container mx-auto flex-col justify-center w-1/2 p-5 bg-green-300">
        <div class="my-2 flex justify-center">
            <h1 class="font-bold text-lg">{{ __('Log In') }}</h1>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-black" for="email">
                    Email
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="email" id="email" autocomplete="email" value="{{ old('email') }}" required>

                @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-black" for="password">
                    Password
                </label>

                <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" autocomplete="current-password">

                @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <div>
                    <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? ' checked' : '' }}>

                    <label class="text-xs text-black font-bold uppercase" for="remember">
                        Remember Me
                    </label>
                </div>

                @error('remember')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                    Submit
                </button>

                <a href="{{ route('password.request') }}" class="text-xs text-black">Forgot Your Password?</a>
            </div>
        </form>
    </div>
</div>
@endsection