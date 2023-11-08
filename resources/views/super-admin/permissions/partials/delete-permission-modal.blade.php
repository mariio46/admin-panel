<x-alert-dialog name="delete-permission-{{ $item->id }}" maxWidth="xl" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <x-alert-dialog.content class="max-w-xl">
        <x-alert-dialog.header>
            <x-alert-dialog.title>
                {{ __('Delete ' . $item->name . ' ?') }}
            </x-alert-dialog.title>
            <x-alert-dialog.description>
                {{ __('Once this permission is deleted, all of its power will be permanently deleted and detached.') }}
            </x-alert-dialog.description>
        </x-alert-dialog.header>
        <form class="" method="post" action="{{ route('permissions.delete', $item) }}">
            @csrf
            @method('delete')
            <div class="mt-6 flex justify-end">
                <x-button type="button" variant="outline" x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-button>
                <x-button class="ml-3" type='submit' variant="destructive">
                    {{ __('Delete') }}
                </x-button>
            </div>
        </form>
    </x-alert-dialog.content>
</x-alert-dialog>
