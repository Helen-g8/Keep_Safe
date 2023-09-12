<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .font-palatino {
            font-family: 'Palatino Linotype';
        }
        @font-face {
            font-family: "Palatino Linotype";
            src: url('{{ asset('fonts/Palatino Linotype.ttf') }}');
            font-weight: 400;
        }
        @font-face {
            font-family: "Palatino Linotype";
            src: url('{{ asset('fonts/Palatino Linotype Regular.ttf') }}');
            font-weight: 300;
        }
        @font-face {
            font-family: "Palatino Linotype";
            src: url('{{ asset('fonts/Palatino Linotype Bold.ttf') }}');
            font-weight: 700;
        }
    </style>
</head>

<body class="font-[Acme]">
    <x-nav.nav />

    <div class="h-screen pt-[52px]">
        {{ $slot }}
    </div>
</body>

</html>
