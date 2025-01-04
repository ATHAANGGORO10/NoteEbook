<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.2">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NoteEbook-@yield('title', 'Beranda')</title>
    <link rel="icon" href="{{ asset('asset/asset-logo-dashboard/NoteEbook.png') }}" type="image/svg+xml">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="base-body">
    @yield('content')
    <aside class="screenLoadSection" id="screenLoading">
        <span class="iconsLoadSection"></span>
    </aside>
</body>

</html>
