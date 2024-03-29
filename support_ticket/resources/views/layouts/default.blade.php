<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Support Desk</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    @livewireStyles
</head>
<body>
    <main class="p-4">
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>