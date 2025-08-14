<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./favicon.ico">
    @vite('resources/css/app.css')
    <title>{{ $title }} SoloNet Internet Bills</title>
</head>
<body class="h-full bg-gray-100 font-sans">
    <div class="min-h-full">

        <x-navbar>{{ $title }}</x-navbar>
        
        <main>
            <div>
                {{ $slot }}
            </div>
        </main>
        
    </div>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>