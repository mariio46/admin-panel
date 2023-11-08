<div {{ $attributes->twMerge('mb-6 relative transform overflow-hidden rounded-lg bg-background px-6 py-6 shadow-xl transition-all sm:mx-auto sm:w-full') }} x-show="show"
    x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
    x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
    <div class="absolute right-3 top-3">
        <button x-on:click="$dispatch('close')">
            <x-tabler-x class="h-5 w-5 stroke-muted-foreground stroke-[1.5] hover:stroke-foreground" />
        </button>
    </div>
    {{ $slot }}
</div>
