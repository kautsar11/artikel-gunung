<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/65c8fa5346.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/assets/mobile-button.js') }}" defer></script>
</head>

<body class="min-h-screen flex flex-col">
    <!-- navbar -->
    @include('components.layout._header')
    
    {{ $slot }}

    {{-- footer --}}
    @include('components.layout._footer')
</body>

</html>
