<x-tab>
    <x-tab.head>
        <x-tab.header>
            <x-tab.link value="Account" :href="route('settings.account')" :active="request()->routeIs('settings.account')" />
            <x-tab.link value="Security" :href="route('settings.security')" :active="request()->routeIs('settings.security')" />
            <x-tab.link value="Danger" :href="route('settings.danger')" :active="request()->routeIs('settings.danger')" />
        </x-tab.header>
    </x-tab.head>
    {{ $slot }}
</x-tab>
