<!DOCTYPE html>
<html lang="es">

<head>
    <title>{{ config('app.name') }} Gim</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    @laravelPWA
</head>

<body>


    {{ $slot }}

    @livewireScripts



    <script src="{{ asset('js/app.js') }}"></script>





</body>

</html>
