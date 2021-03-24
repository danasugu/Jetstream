<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- @foreach ($posts as $post )
                <div class="p-4 border-b border-gray-200">
                <h2 class="text-xl font-medium"> {{ $post->title }} </h2>
                <p class="text gray-600 leading-relaxed"> {{ $post->body }} </p>  
                </div>    
               @endforeach -->

               @livewire('posts', ['posts' => $posts])
            </div>
        </div>
    </div>
</x-app-layout>
