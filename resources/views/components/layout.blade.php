<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/nearulogo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .fonts {
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
        @font-face {
            font-family: "Poppins_Black";
            src: url('{{ asset('fonts/Poppins-Black.ttf') }}');
            font-weight: 700;
        }
        @font-face {
            font-family: "Poppins_Medium";
            src: url('{{ asset('fonts/Poppins-Medium.ttf') }}');
            font-weight: 700;
        }
        @font-face {
            font-family: "Poppins_SemiBold";
            src: url('{{ asset('fonts/Poppins-SemiBold.ttf') }}');
            font-weight: 700;
        }
        
    </style>
</head>

<body class="font-[Poppins_SemiBold]">
    <x-nav.nav />

    <div class="h-screen pt-[52px]">
        {{ $slot }}
    </div>
</body>

</html>
