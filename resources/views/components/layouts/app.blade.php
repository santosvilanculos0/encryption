<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    <div class="min-h-full">
        {{-- <nav></nav> --}}
        {{-- <header></header> --}}
        <main>
            {{ $slot }}
        </main>
    </div>


    @livewireScripts
</body>

</html>
