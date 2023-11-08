<x-base-layout>
    <div class="min-h-screen">
        <x-side-navigation />
        <div class="mx-auto flex max-w-screen-2xl">
            <x-aside>
                <x-aside.link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <x-tabler-chart-pie-3 />
                    Dashboard
                </x-aside.link>
                <x-aside.link :href="route('settings.account')" :active="request()->routeIs('settings.*')">
                    <x-tabler-settings />
                    Settings
                </x-aside.link>
                </form>
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
    </div>
</x-base-layout>
