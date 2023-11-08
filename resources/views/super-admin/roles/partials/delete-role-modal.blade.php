<x-alert-dialog name="delete-role-{{ $item->id }}" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <x-alert-dialog.content class="max-w-xl">
        <x-alert-dialog.header>
            <x-alert-dialog.title>
                {{ __('Delete ' . $item->name . ' ?') }}
            </x-alert-dialog.title>
            <x-alert-dialog.description>
                {{ __('Once this role is deleted, all of its power will be permanently deleted and detached.') }}
            </x-alert-dialog.description>
        </x-alert-dialog.header>
        <form class="" method="post" action="{{ route('roles.delete', $item) }}">
            @csrf
            @method('delete')
            <x-alert-dialog.footer>
                <div class="mt-6 flex justify-end">
                    <x-button type="button" variant="outline" x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-button>
                    <x-button class="ml-3" type='submit' variant="destructive">
                        {{ __('Delete') }}
                    </x-button>
                </div>
            </x-alert-dialog.footer>
        </form>
    </x-alert-dialog.content>
</x-alert-dialog>
