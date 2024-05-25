<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        {{--
        <link rel="stylesheet" href="css/style.css" />
        --}} @vite('resources/css/app.css') @vite('resources/js/app.js')
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
        <title>{{ $title }}</title>
    </head>
    <body class="h-full">
        <div class="min-h-full bg-white mb-32">
            <x-navbar></x-navbar>
            {{-- <x-header>{{ $title }}</x-header> --}}
            <main>
                <!-- <div class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-h8">
                    {{ $slot }}
                </div> -->
                <div
                    class="relative px-6 py-6 mx-auto isolate pt-14 lg:px-8 sm:px-6"
                >
                    {{ $slot }}
                </div>
            </main>
            <x-footer></x-footer>
        </div>
    </body>
</html>
