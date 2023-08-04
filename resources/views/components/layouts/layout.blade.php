<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"/>
    <link href="https://fonts.bunny.net/css?family=georama:200,200i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"/>

    @vite('resources/css/app.css')
</head>
<body class="font-figtree antialiased text-zinc-900 scroll-smooth bg-orange-300">
<main class="p-10">
    <section class="px-6 py-8">
        <x-base.navigation/>

        {{ $slot }}

        <x-base.footer/>
    </section>
</main>
@vite('resources/js/app.js')
</body>
</html>