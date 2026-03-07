<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'People Access' }}</title>
    <meta name="description" content="{{ $description ?? 'People & HR consultancy helping growth-stage companies build the people systems they need.' }}" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet" />

    {{-- Global Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Livewire --}}
    @livewireStyles
</head>
<body>

    {{-- Grain overlay — sits on top of everything, pointer-events off --}}
    @include('components.grain')

    {{-- Navbar --}}
    @include('components.navbar')


    {{-- Page content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('components.footer')

    @livewireScripts
</body>
</html>
