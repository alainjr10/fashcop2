<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for farmer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as a Farmer! <br>
                    Your username is {{ Auth::user()->name }} <br>
                    Your email is {{ Auth::user()->email }}
                </div>
                <h4 class="ml-8 font-extrabold underline">Your Projects</h4>
                <div class="grid grid-cols-4">
                    @foreach ( Auth::user()->posts as $post)
                        <div class="p-6 bg-white border-b border-gray-200 grid grid-rows gap-3">
                                <a href="/p/{{ $post->id }}" >
                                    <div class=" ">
                                        <img src="/storage/{{ $post->image }}" alt=""  class="object-none h-48 w-full">
                                    </div>
                                    <h4 class="ml-8 font-extrabold underline">{{ $post->caption }}</h4>
                                </a>
                                <h4 class="ml-8 ">{{ $post->location }}</h4>
                                <h4 class="ml-8 ">{{ $post->budget }}</h4>
                                
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>