@extends('layouts.master')

@section('added_content')
                <div class="lg:flex lg:justify-between">
                    
                    <div class="lg:w-1/6 px-20">
                        <x-sidebar-links/>
                    </div>
                   
                    <div class="lg:flex-1 lg:mx-10 " style="max-width: 700px;">
                        @yield('content')
                    </div>
                   
                    <div class="lg:w-1/4 bg-green-400 bg-opacity-75 p-5 mx-8 rounded-lg">
                        <x-followers-list :followeds="$followeds"/>
                    </div>
                  
                </div>
@endsection('content')