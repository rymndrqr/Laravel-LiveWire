<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Newsletter Demo</title>

    {{-- Tailwind via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Alpine for the 5s auto-hide --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Livewire styles (v2 & v3 compatible) --}}
    @livewireStyles
</head>
<body class="min-h-screen text-slate-900 antialiased">
    {{ $slot }}

    {{-- Livewire scripts (v2 & v3 compatible) --}}
    @livewireScripts
</body>
</html>
