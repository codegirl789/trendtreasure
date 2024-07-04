<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trend Treasure</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-col lg:flex-row justify-between items-start">
        <div class="basis-1/5 border-r border-gray-200 shadow ">
            <div class="py-2 px-4 text-lg h-16 leading-10 shadow">
                <i class="fa-solid fa-bag-shopping text-violet-500"></i> Trend<span class="font-semibold">Treasure</span>
                | <span class="font-bold">Admin</span>
            </div>
            @include('admin.__partials.sidebar')
        </div>
        <div class="md:basis-4/5 w-full">
            @include('admin.__partials.navbar')
            <div class="py-4">
                {{ $slot }}
            </div>
        </div>
    </div>

</body>

</html>
