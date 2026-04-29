<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col bg-gray-100">

    @include('partials.header')

    <main class="flex-grow container mx-auto p-6">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>