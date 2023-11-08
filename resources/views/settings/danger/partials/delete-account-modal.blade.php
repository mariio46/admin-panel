<x-alert-dialog name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <x-alert-dialog.content class="max-w-xl">
        <x-alert-dialog.header>
            <x-alert-dialog.title>
                {{ __('Are you sure you want to delete your account?') }}
            </x-alert-dialog.title>
            <x-alert-dialog.description>
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </x-alert-dialog.description>
        </x-alert-dialog.header>
        <form method="post" action="{{ route('settings.danger') }}">
            @csrf
            @method('delete')
            <div>
                <x-label class="sr-only" for="password" value="{{ __('Password') }}" />
                <x-input class="mt-1 block w-full" id="password" name="password" type="password" placeholder="{{ __('Password') }}" />
                <x-input-error class="mt-2" :messages="$errors->userDeletion->get('password')" />
            </div>
            <x-alert-dialog.footer>
                <div class="mt-6 flex justify-end">
                    <x-button type='button' variant="outline" x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-button>
                    <x-button class="ml-3" type="submit" variant="destructive">
                        {{ __('Delete Account') }}
                    </x-button>
                </div>
            </x-alert-dialog.footer>
        </form>
    </x-alert-dialog.content>
</x-alert-dialog>
