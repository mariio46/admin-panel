@props(['active' => false, 'isDanger' => false])

<li class="-mx-4">
    <a
        {{ $attributes->twMerge('flex items-center [&>svg]:w-5 [&>svg]:h-5 [&>svg]:stroke-[1.3] gap-x-2 hover:bg-accent/80 tracking-tight text-sm hover:text-foreground px-4 py-2 rounded-md', $active ? 'text-foreground font-semibold bg-accent/80' : 'text-muted-foreground', $isDanger && $active ? 'text-destructive' : 'text-foreground') }}>
        {{ $slot }}
    </a>
</li>
