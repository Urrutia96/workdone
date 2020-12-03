<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <nav role="navigation" class="border-b-8 border-yellow-600 py-2 bg-main" >
            <div class="max-w-7xl mx-auto container flex justify-between items-center px-2">
                <div class="bg-white px-2 py-1 rounded">
                    <h1 class="text-xl sm:text-3xl text-red-600 font-bold"><span class="text-blue-500">PRO</span>gresso</h1>
                </div>
                <div class="flex justify-end space-x-2 sm:space-x-8 items-center text-white font-semibold">
                    <div>
                        Santos
                    </div>
                    <div class="flex items-center space-x-2">
                        <span>Logout </span>
                        <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </nav>
        
        <main class="max-w-7xl mx-auto container px-2">
            {{ $slot }}
        </main>
        
        <footer class="bg-main">
            <div class="max-w-7xl mx-auto container px-2 py-10">
                <div class="grid grid-cols-3 gap-8 items-center text-white">
                    <div></div>
                    <div class="text-center">
                        <div>
                            Copyright© 2020
                        </div>
                        <div>
                            Powered by <span class="font-bold">PROgresso Labs</span>
                        </div>
                    </div>
                    <div class="">
                        <div>
                            P.O. Box 902 3472 Ullamcorper Street
                        </div>
                        <div>
                            Lynchburg DC 29738
                        </div>
                        <div>
                            (268) 442-2428
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

