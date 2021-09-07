<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            html, body{
                height: 100%;   
                margin: 0;
                padding: 0;
            }
            .error{
                color: red;
            }
            .hr-sect {
                display: flex;
                flex-basis: 100%;
                align-items: center;
                color: rgba(0, 0, 0, 0.5);
                margin: 15px 0px;
            }
            .hr-sect:before,
            .hr-sect:after {
                content: "";
                flex-grow: 1;
                background: rgba(0, 0, 0, 0.5);
                height: 1px;
                font-size: 0px;
                line-height: 0px;
                margin: 0px 8px;
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased bg-gray-50">
            {{ $slot }}
        </div>
    </body>
</html>
