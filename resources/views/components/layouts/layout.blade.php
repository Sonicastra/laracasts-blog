<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Funko Blog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"/>
    <link href="https://fonts.bunny.net/css?family=georama:200,200i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
          referrerpolicy="no-referrer"/>

    @vite('resources/css/app.css')
</head>
<body class="font-figtree antialiased text-zinc-900 scroll-smooth bg-orange-100">
<main class="max-w-7xl mx-auto p-10">

    <x-base.navigation/>

    {{ $slot }}

    <x-base.footer/>

    <x-flash-message key="success"/>

</main>
@vite('resources/js/app.js')
</body>
</html>