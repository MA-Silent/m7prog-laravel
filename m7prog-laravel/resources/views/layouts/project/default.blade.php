<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite([ "resources/css/app.css", "resources/js/app.js" ])
</head>
<body class="bg-slate-800 h-full">
    <header class="flex justify-center px-2 py-4 text-white">
        <div class="flex w-[70%] text-center">
            <div class="flex border mx-auto w-[50%] h-14 text-center items-center justify-center self-center">BANNER</div>
            @if (!auth())
                <div class="flex border rounded-full cursor-pointer p-1.5 py-1 self-center select-none text-center h-fit">LOGIN</div>
            @endif
        </div>
    </header>
    <main class="flex items-center justify-center h-[calc(100%-7.5rem)]"><div class="flex w-[90%] h-[100%] bg-slate-700 rounded-3xl px-2 flex-col">{{ $slot }}</div></main>
    @include('layouts.project.footer')
    @include('layouts.project.scripts')
</body>
</html>