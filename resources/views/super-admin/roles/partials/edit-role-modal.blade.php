<x-alert-dialog name="edit-{{ str($item->name)->slug() }}-role-{{ $item->id }}" :show="$errors->updateRole->isNotEmpty()" focusable>
    <x-alert-dialog.content class="max-w-2xl">
        <x-alert-dialog.header>
            <x-alert-dialog.title>
                Update {{ $item->name }}
            </x-alert-dialog.title>
            <x-alert-dialog.description>
                This action will change the old value from {{ $item->name }}
            </x-alert-dialog.description>
        </x-alert-dialog.header>
        <form class="" method="post" action="{{ route('roles.update', $item->id) }}">
            @csrf
            @method('put')
            <div>
                <x-label for="name" :value="__('name')" />
                <x-input class="mt-1 block w-full" id="name" name="name" type="text" required autofocus :value="old('name', $item->name)" autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->updateRole->get('name')" />
            </div>
            <div class="mt-4">
                <x-label for="guard_name" :value="__('guard name')" />
                <x-input class="mt-1 block w-full" id="guard_name" name="guard_name" type="text" required :value="old('guard_name', $item->guard_name)" autocomplete="guard_name" placeholder="Default to web" />
                <x-input-error class="mt-2" :messages="$errors->updateRole->get('guard_name')" />
            </div>
            <div class="mt-6 flex justify-end">
                <x-button type="button" variant="outline" x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-button>
                <x-button class="ml-3" type='submit'>
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
    </x-alert-dialog.content>
</x-alert-dialog>
