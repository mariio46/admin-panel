<x-tab>
    <x-tab.head>
        <x-tab.header>
            <x-tab.link value="Table" :href="route('permissions.table')" :active="request()->routeIs('permissions.table')" />
        </x-tab.header>
    </x-tab.head>
    {{ $slot }}
</x-tab>
