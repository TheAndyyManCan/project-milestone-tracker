@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Andy McDonald - Portfolio' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col overflow-hidden font-figtree">
        <x-layout.header />
        <main class="h-screen overflow-y-scroll flex-grow bg-dark-100">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
