<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    @livewireStyles
    @yield('head')
</head>
<body class="bg-body">
    <!-- include navbar here -->

    @yield('content')


    <!-- include footer here -->

    @livewireScripts
</body>
</html>