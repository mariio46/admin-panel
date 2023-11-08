@props(['header'])

<header class="flex items-center justify-between border-b bg-background py-4 sm:py-6">
    <h1 class="px-6 text-xl font-bold text-foreground sm:px-8">
        {{ $header }}
    </h1>
    <div class="px-4">
        <x-theme-toggle class="h-[2.7rem] w-[2.7rem]" size="icon" variant="outline" />
    </div>
</header>
