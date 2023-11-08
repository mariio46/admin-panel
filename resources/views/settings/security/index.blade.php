<x-auth-layout title="Security">
    <x-slot:header>
        Security Information
    </x-slot:header>
    <x-setting-tab>
        <x-tab.content>
            <x-card class="!max-w-xl">
                <x-card.header>
                    <x-card.title>Update Password</x-card.title>
                    <x-card.description>Ensure your account is using a long, random password to stay secure.</x-card.description>
                </x-card.header>
                <x-card.content>
                    <form action="{{ route('settings.security') }}" method="post">
                        @csrf
                        @method('put')
                        <div>
                            <x-label for="current_password" :value="__('current password')" />
                            <x-input class="mt-1" id="current_password" name="current_password" type="password" autocomplete="current_password" />
                            <x-input-error class="mt-1" :messages="$errors->updatePassword->get('current_password')" />
                        </div>
                        <div class="mt-6">
                            <x-label for="password" :value="__('new password')" />
                            <x-input class="mt-1" id="password" name="password" type="password" autocomplete="new-password" />
                            <x-input-error class="mt-2" :messages="$errors->updatePassword->get('password')" />
                        </div>
                        <div class="mt-6">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-input class="mt-1" id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
                            <x-input-error class="mt-2" :messages="$errors->updatePassword->get('password_confirmation')" />
                        </div>
                        <div class="mt-6 flex items-center gap-4">
                            <x-button>{{ __('Save') }}</x-button>
                            <x-action-message status="password-updated" />
                        </div>
                    </form>
                </x-card.content>
            </x-card>
        </x-tab.content>
    </x-setting-tab>
</x-auth-layout>
