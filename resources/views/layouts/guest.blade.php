<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" type="image/png" href="./favicon.png">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-100 max-w-6xl mx-auto mt-6 lg:mt-24 px-4 ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset ($header)
                <header class="">
                    <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Page Footer -->
            <footer class="mt-64 mb-16">
                <div class="space-y-12">
                    <!--
                    <div>Socials</div>
                    <div class="space-y-4">
                        <div class="uppercase text-xs tracking-widest text-gray-400 font-semibold">
                            Subscribe
                        </div>
                        <div class="text-sm text-gray-500">
                            Subscribe to my newsletter to get regular content not published on my site.
                        </div>
                        <div>
                            <input type="text" class="inline-flex items-center mr-1 bg-gray-700 border border-transparent rounded font-medium text-sm text-white hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" placeholder="Enter your email address">
                            <x-button>Join the newsletter</x-button>
                        </div>
                    </div>
                    -->
                    <div class="flex justify-between">
                        <!--
                        <div class="flex">
                            <div class="space-x-2">
                                 <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-200 focus:outline-none transition duration-150 ease-in-out" href="#">Blog</a>
                                <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-200 focus:outline-none transition duration-150 ease-in-out" href="#">Video & Photo Setup</a>
                                <a class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-200 focus:outline-none transition duration-150 ease-in-out" href="#">Jobs</a>
                            </div>
                        </div>
                        -->
                        <div class="text-sm text-gray-500">
                           © {{ now()->year }} Taylor Ivanoff. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
