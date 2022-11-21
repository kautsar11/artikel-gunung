<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Artikel Gunung</title>

    {{-- tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/65c8fa5346.js" crossorigin="anonymous"></script>

    <!-- tiny library for text rich -->
    <script src="https://cdn.tiny.cloud/1/15gb8kqdjbcom2naq57gmvjg6kra064bwf4k1ukeugyl3ixe/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
      tinymce.init({ 
        selector: "textarea" ,
        placeholder: "Tuliskan konten disini"
      });
    </script>

    {{-- external js --}}
    <script src="{{ asset('js/assets/mobile-button.js') }}" defer></script>
</head>

<body class="min-h-screen flex flex-col">

    {{ $slot }}

</body>

</html>
