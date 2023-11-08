{{-- <aside class="fixed hidden h-screen w-80 shrink-0 items-start overflow-y-auto border-r px-8 py-4 lg:flex">
    <ul class="sticky top-8 flex w-full flex-col gap-y-2">
        {{ $slot }}
    </ul>
</aside> --}}

<aside class="hidden min-h-screen w-80 shrink-0 items-start border-r p-8 lg:flex">
    <ul class="sticky top-8 flex w-full flex-col gap-y-2">
        <li class="mb-8">
            <div class="flex items-center font-normal">
                <div class="mr-3 shrink-0">
                    <x-avatar class="h-12 w-12">
                        <x-avatar.image :src="auth()
                            ->user()
                            ->avatar()" />
                        <x-avatar.fallback :value="acronym(auth()->user()->name)" />
                    </x-avatar>
                </div>
                <div>
                    <div>{{ auth()->user()->name }}</div>
                    <div class="text-sm text-muted-foreground">
                        {{ auth()->user()->email }}
                    </div>
                </div>
            </div>
        </li>
        {{ $slot }}

        <x-separator />
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-aside.link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                <x-tabler-logout />
                {{ __('Log Out') }}
            </x-aside.link>
        </form>
    </ul>
</aside>
