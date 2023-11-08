<x-card class="mb-2 w-1/2">
    <x-card.header>
        <x-card.title>
            Add new role
        </x-card.title>
        <x-card.description>
            Add new role into your application.
        </x-card.description>
    </x-card.header>
    <x-card.content>
        <form action="{{ route('roles.store') }}" method="post">
            @csrf
            <div>
                <x-label for="name" :value="__('name')" />
                <x-input class="mt-1 block w-full" id="name" name="name" type="text" autofocus required :value="old('name')" autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->storeRole->get('name')" />
            </div>
            <div class="mt-4">
                <x-label for="guard_name" :value="__('guard name')" />
                <x-input class="mt-1 block w-full" id="guard_name" name="guard_name" type="text" :value="old('guard_name')" autocomplete="guard_name" placeholder="Default to web" />
                <x-input-error class="mt-2" :messages="$errors->storeRole->get('guard_name')" />
            </div>
            <div class="mt-4 flex items-center justify-end">
                <x-button type='submit'>
                    {{ __('Save') }}
                </x-button>
            </div>

        </form>
    </x-card.content>
</x-card>
