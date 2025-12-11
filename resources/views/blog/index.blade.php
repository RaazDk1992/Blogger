<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($blogs as $blog)

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="font-semibold text-lg text-gray-800 leading-tight">
                            {{ $blog->title }}
                        </h3>
                        <p class="mt-2 text-gray-600">
                            {{ $blog->content }}
                        </p>
                    </div>  
                </div>
            
            @endforeach
        </div>
    </div>
</x-app-layout>
