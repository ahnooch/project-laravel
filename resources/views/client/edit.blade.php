<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Add client') }}
        </h2>
    </header>

    <form method="post" action="{{ route('client.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('PATCH')
        <div>
            <x-input-label for="des" value="raisonSociale" />
            <x-text-input type='text' name='raisonSociale' value='{{$client->raisonSociale}}' class="mt-1 block w-full"  />
        </div>
        <div>
            <x-input-label for="prix" value="Tel" />
            <x-text-input type='text' name='tel' value='{{$client->tel}}' class="mt-1 block w-full"  />
        </div>
        <div>
            <x-input-label for="Adresse" value="Adresse" />
            <x-text-input type='text' name='Adresse' value='{{$client->Adresse}}' class="mt-1 block w-full"  />
        </div>
        <div>
            <x-input-label for="email" value="Email" />
            <x-text-input type='text' name='email' value='{{$client->email}}' class="mt-1 block w-full"  />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>

        </div>
    </div>

</x-app-layout>