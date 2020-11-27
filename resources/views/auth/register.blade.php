@extends('layouts.master')

@section('added_content')
<div class="flex container mx-auto">
    <ul>
        <li><a href="{{route('login')}}" class="font-bold text-lg mb-4 block">Login</a></li>
    </ul>
</div>
<div class="flex">
    <div class="container mx-auto flex-col justify-center w-1/2 p-5 bg-green-300">
        <div class="my-2 flex justify-center">
            <h1 class="font-bold text-lg">{{ __('Register') }}</h1>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                    Username
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" value="{{ old('username') }}" required>

                @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                    Name
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" autocomplete="name" value="{{ old('name') }}" required>

                @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                    Email
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text" name="email" id="email" autocomplete="email" value="{{ old('email') }}" required>

                @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                    Password
                </label>

                <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" autocomplete="current-password">

                @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password-confirm">
                    {{ __('Confirm Password') }}
                </label>

                <input class="border border-gray-400 p-2 w-full" type="password" name="password_confirmation" id="password-confirm">
            </div>


            <div>
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                    {{ __('Register') }}
                </button>
            </div>
        </form>

    </div>
</div>
@endsection