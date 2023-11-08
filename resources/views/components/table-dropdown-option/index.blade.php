@props(['id' => 'stacked-list-menu-1', 'data' => 'data-stacked-list-menu-1', 'placement' => 'bottom-end', 'type' => 'yellow', 'title' => 'Operator', 'width' => 'w-60'])

<div class="flex items-center gap-x-2">
    <div>
        <x-button id="{{ $id }}" data-dropdown-toggle="{{ $data }}" data-dropdown-placement="{{ $placement }}" type="button" variant='outline' size='icon'>
            <x-tabler-dots class="h-5 w-5 stroke-[1.3]" />
        </x-button>
        <div class="{{ $width }} z-10 hidden rounded-md border bg-background py-1 shadow-lg" id="{{ $data }}" aria-labelledby="{{ $id }}">
            {{ $content }}
        </div>
    </div>
</div>
