<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->caption }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="grid grid-cols-2  ml-5">
                <div class=" ">
                    <img src="/storage/{{ $post->image }}" alt=""  class="object-none h-78 w-55">
                </div>
                <div class="p-6 bg-white border-b border-gray-200 grid grid-rows gap-3">
                    <h4 class="ml-8 font-extrabold underline">{{ $post->user->name }}</h4>
                    <h4 class="ml-8 ">{{ $post->caption }}</h4>
                    <h4 class="ml-8 ">{{ $post->location }}</h4>
                    <h4 class="ml-8 ">{{ $post->budget }}</h4>
                        
                </div>
            </div>
            
        </div>
    </div>
</div>
</x-app-layout>


