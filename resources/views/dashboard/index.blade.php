<x-auth-layout title="Dashboard">
    <x-slot:header>
        Dashboard
    </x-slot:header>
    <div class="p-6 sm:p-8">
        <x-card>
            <x-card.header>
                <x-card.title>
                    Dashboard
                </x-card.title>
                <x-card.description>
                    All statistics related to your account.
                </x-card.description>
            </x-card.header>
            <x-card.content>
                @hasrole('super admin')
                    <x-link href="{{ route('roles.table') }}" variant='outline'>Super Admin Menu</x-link>
                @endhasrole
            </x-card.content>
        </x-card>
    </div>
</x-auth-layout>
