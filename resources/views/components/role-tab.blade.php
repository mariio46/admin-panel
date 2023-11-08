<x-tab>
    <x-tab.head>
        <x-tab.header>
            <x-tab.link value="Table" :href="route('roles.table')" :active="request()->routeIs('roles.table')" />
        </x-tab.header>
    </x-tab.head>
    {{ $slot }}
</x-tab>
