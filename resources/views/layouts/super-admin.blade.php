<x-base-layout>
    <div class="min-h-screen">
        <x-side-navigation />
        <div class="mx-auto flex max-w-screen-2xl">
            <x-aside>
                <x-aside.link :href="route('roles.table')" :active="request()->routeIs('roles.*')">
                    <x-tabler-user-check />
                    Roles
                </x-aside.link>
                <x-aside.link :href="route('permissions.table')" :active="request()->routeIs('permissions.*')">
                    <x-tabler-license />
                    Permissions
                </x-aside.link>
                <x-aside.link :href="route('role.assignments.create')" :active="request()->routeIs('role.assignments.*', 'permission.assignments.*')">
                    <x-tabler-certificate />
                    Assignment
                </x-aside.link>
                <x-separator />
                <x-aside.link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <x-tabler-chart-pie-2 />
                    Dashboard
                </x-aside.link>
            </x-aside>
            <main class="w-full">
                @isset($header)
                    <x-header :$header />
                @endisset
                <div>
                    {{ $slot }}
                </div>
            </main>
        </div>
        <x-flash-message :status="flash()->message" />
    </div>
    {{-- <x-slot:scripts> --}}
    {{-- @push($script)
            {{ $script }}
        @push --}}
    {{-- </x-slot:scripts> --}}

</x-base-layout>
