@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Project Milestone Tracker' }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col overflow-hidden">
        <x-layout.header />
        <main class="h-screen overflow-y-scroll flex-grow">
            {{ $slot }}
        </main>
        <x-layout.footer />
    </div>
</body>
</html>
