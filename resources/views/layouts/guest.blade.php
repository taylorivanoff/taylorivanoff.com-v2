<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link rel="icon" type="image/png" href="./favicon.png">

        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-100 max-w-6xl mx-auto mt-6 lg:mt-24 px-4 ">
            @include('layouts.navigation')

            @isset ($header)
                <header class="">
                    <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main>
                {{ $slot }}
            </main>

            <footer class="mt-64 mb-16">
                <div class="space-y-12">
                    <div class="flex justify-between">
                        <div class="text-sm text-gray-500">
                           © {{ now()->year }} Taylor Ivanoff. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
