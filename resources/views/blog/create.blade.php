<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-800 leading-tight">
            {{ __('Create a Blog') }}
        </h2>
    </x-slot>
    <div class="mt-6 p-6  max-w-4xl flex ">

       <form class="w-full " action="{{ route('blog.store') }}" method="POST">
            @csrf
             <x-custom-text-input name="title" class="w-full"></x-custom-text-input>
             <x-textarea-input name="content" class="w-full mt-4"></x-textarea-input>
             <div class="flex justify-center mt-4">
                <x-primary-button class="bg-orange-600">
                    Save this
                </x-primary-button>
            </div>

       </form>


    </div>
</x-app-layout>