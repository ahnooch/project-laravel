<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add Service') }}
        </h2>
    </header>

    <form method="post" action="{{ route('service.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('PATCH')
        <div>
            <x-input-label for="des" value="désignation" />
            <textarea type='text'  name='des' class="mt-1 block w-full" >{{ $service->désignation }}</textarea>
        </div>
        <div>
            <x-input-label for="prix" value="prix" />
            <x-text-input type='number' value='{{ $service->prix }}' name='prix' class="mt-1 block w-full"  />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>

        </div>
    </div>

</x-app-layout>