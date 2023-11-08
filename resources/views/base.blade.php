<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ? $title . ' / ' . config('app.name') : config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Scripts -->

        <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans antialiased" x-data="{ darkMode: false }" x-init="if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) { localStorage.setItem('darkMode', JSON.stringify(true)); } darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>

        <!-- Layout -->

        {{-- <select class="js-example-basic-multiple" data-placeholder="Select one or more cities..." data-allow-clear="false" title="Select city..." style="width: 100%" multiple="multiple">
            <option>Amsterdam</option>
            <option>Rotterdam</option>
            <option>Den Haag</option>
        </select> --}}
        <div x-bind:class="{ 'dark': darkMode === false }">
            {{ $slot }}
        </div>
        <!-- /Layout -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
        {{-- <script src="{{ asset('js/theme.js') }}"></script> --}}
    </body>

    @stack('scripts')
    {{-- @isset($scripts)
        {{ $scripts }}
    @endisset --}}

</html>
