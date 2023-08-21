<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        @font-face {
            font-family: 'MiFuente';
            src: url('/ruta/a/tu/fuente.ttf') format('truetype');
            /* Puedes ajustar la ruta a tu fuente según su ubicación en tu sistema de archivos. */
        }
    </style>
    
</head>
<body>
    <x-nav.nav/>

    <div class="mt-[68px]">
        {{ $slot }}
    </div>
</body>
</html>
