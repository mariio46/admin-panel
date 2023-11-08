@props(['orientation' => 'horizontal'])
<div {{ $attributes->twMerge('shrink-0 bg-border', $orientation == 'horizontal' ? 'h-px w-full' : 'h-full w-px') }}></div>
