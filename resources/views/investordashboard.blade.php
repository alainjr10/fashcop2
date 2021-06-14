<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for investor') }}
        </h2>
            <a href="/profile/{{ Auth::user()->id }}/edit">Edit Profile</a>
        
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as an Investor!
                </div>
            </div>
        </div>
    </div>
    <div class="top-projects">
        <h4 class="font-extrabold ml-10 mr-10 text-2xl underline">Top Projects </h4>
        <h2 class="font-light ml-10 mr-10 text-sm"> Here are the top funded projects on our site Currently </h2>
        <div class="grid grid-cols-4 ml-10 mr-10 mb-12">
            @foreach ( $posts as $post)
                <div class="p-3 bg-white border-b border-gray-200 grid grid-rows gap-1">
                        <a href="/p/{{ $post->id }}" >
                            <div class=" ">
                                <img src="/storage/{{ $post->image }}" alt=""  class="object-none h-48 w-full">
                            </div>
                            <h4 class="ml-3 font-extrabold underline">{{ $post->caption }}</h4>
                        </a>
                        <h4 class="ml-3 ">{{ $post->location }}</h4>
                        <h4 class="ml-3 ">FCFA {{ $post->budget }}</h4>
                        
                </div>
            @endforeach
        </div>
    </div>

        {{-- Reccommended projects --}}
    <div class="recommended-projects">
        <h4 class="font-extrabold ml-10 mr-10 text-2xl underline">Recommended Projects </h4>
        <h2 class="font-light ml-10 mr-10 text-sm"> Based on you profile and interests, we recommend you to take a look at these projects </h2>
        <div class="grid grid-cols-4 ml-10 mr-10 mb-12">
            @foreach ( $posts as $post)
                <div class="p-3 bg-white border-b border-gray-200 grid grid-rows gap-1">
                        <a href="/p/{{ $post->id }}" >
                            <div class=" ">
                                <img src="/storage/{{ $post->image }}" alt=""  class="object-none h-48 w-full">
                            </div>
                            <h4 class="ml-3 font-extrabold underline">{{ $post->caption }}</h4>
                        </a>
                        <h4 class="ml-3 ">{{ $post->location }}</h4>
                        <h4 class="ml-3 "> FCFA {{ $post->budget }}</h4>
                        
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>