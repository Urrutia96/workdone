<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased bg-gradient-to-l from-main to-end">
        <div 
            class="min-h-screen w-full flex justify-center items-center" 
            style="background-image: url({{ $banner ?? null }}); background-repeat: no-repeat;">
        
            {{ $slot }}

        </div>
    </body>
</html>
