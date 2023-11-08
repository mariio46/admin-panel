<x-auth-layout title="Danger">
    <x-slot:header>
        Danger Zone
    </x-slot:header>
    <x-setting-tab>
        <x-tab.content>
            <x-card class="max-w-xl">
                <x-card.header>
                    <x-card.title>
                        Delete Account
                    </x-card.title>
                    <x-card.description>
                        Once your account is deleted, all of its resources and data will be permanently deleted. Before
                        deleting your account, please download any data or information that you wish to retain.
                    </x-card.description>
                </x-card.header>
                <x-card.content>
                    <x-button x-data="" variant="destructive" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
                        {{ __('Delete Account') }}
                    </x-button>
                </x-card.content>
            </x-card>
            @include('settings.danger.partials.delete-account-modal')
        </x-tab.content>
    </x-setting-tab>
</x-auth-layout>
