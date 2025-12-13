<x-app-layout>
    <x-slot name="header">
        <h2 class="text-blue-800 font-semibold text-xl ">
            {{ __('Update Blogs') }}
        </h2>
    </x-slot>
    <div class="py-10 size-5xl relative">

        <form class="size-5xl">
            <x-text-input class="w-full mx-2"></x-text-input> 
        </form>

    </div>
</x-app-layout>