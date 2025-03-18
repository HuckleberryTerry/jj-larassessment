<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
  </head>
        <body>
            <!--
        This example requires updating your template:

        ```
        <html class="h-full bg-gray-100">
        <body class="h-full">
        ```
        -->
        <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                <div class="shrink-0">
                    <img class="w-30 h-30 rounded-full" src="{{Vite::asset('resources/images/laravel-assessment-logo.svg')}}" alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('login')" type="button">Home</x-nav-link>
                            <x-nav-link href="/employees" :active="request()->is('employees')" type="button">Employees</x-nav-link>
                            <x-nav-link href="/companies" :active="request()->is('companies')" type="button">Companies</x-nav-link>
                            <x-nav-link href="/login" :active="request()->is('login')" type="button">Login</x-nav-link>
                        </div>
                </div>
                </div>

                
            </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <x-nav-link href="/" :active="request()->is('login')" type="button">Home</x-nav-link>
                <x-nav-link href="/employees" :active="request()->is('employees')" type="button">Employees</x-nav-link>
                <x-nav-link href="/companies" :active="request()->is('companies')" type="button">Companies</x-nav-link>
            </div>
            </div>
        </nav>

        {{$slot}}
        </div>

  </body>
</html>