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
            {{ __('Add Client') }}
        </h2>
    </header>

    <form method="post" action="{{ route('client.add') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="des" value="raisonSociale" />
            <x-text-input type='text' name='raisonSociale' class="mt-1 block w-full"  />
        </div>
        <div>
            <x-input-label for="prix" value="Tel" />
            <x-text-input type='text' name='tel' class="mt-1 block w-full"  />
        </div>
        <div>
            <x-input-label for="Adresse" value="Adresse" />
            <x-text-input type='text' name='Adresse' class="mt-1 block w-full"  />
        </div>
        <div>
            <x-input-label for="email" value="Email" />
            <x-text-input type='text' name='email' class="mt-1 block w-full"  />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>

        </div>
    </div>

</x-app-layout>