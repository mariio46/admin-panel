<x-tab>
    <x-tab.head>
        <x-tab.header>
            <x-tab.link value="Assign Role" :href="route('role.assignments.create')" :active="request()->routeIs('role.assignments.create')" />
            <x-tab.link value="Assign Permission" :href="route('permission.assignments.create')" :active="request()->routeIs('permission.assignments.create')" />
        </x-tab.header>
    </x-tab.head>
    {{ $slot }}
</x-tab>
