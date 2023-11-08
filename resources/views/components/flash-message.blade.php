@props(['status'])

@if ($status)
    <div class="fixed right-4 top-4" tabindex="-1" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 10000)">
        <div class="mb-4 flex w-96 items-center rounded-lg border bg-card p-4 text-foreground" id="toast-success" role="alert">
            <div class="{{ flash()->class }} inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg">
                <x-tabler-circle-check class="h-5 w-5" />
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">{{ flash()->message }}</div>
            <button
                class="-mx-1.5 -my-1.5 ml-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-background p-1.5 text-muted-foreground hover:bg-secondary hover:text-foreground focus:ring-2 focus:ring-ring"
                data-dismiss-target="#toast-success" type="button" aria-label="Close">
                <span class="sr-only">Close</span>
                <x-tabler-x class="h-5 w-5" />
            </button>
        </div>
    </div>
@endif
