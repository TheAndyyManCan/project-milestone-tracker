<div class="bg-dark-300 w-full p-8 flex flex-col">
    <div class="p-4 text-4xl font-bold text-white">
        <a href="/" class="hover:text-dark-600">Project Milestone Tracker</a>
    </div>
    <nav class="flex lg:right-0 lg:absolute my-auto p-6">
        <ul class="text-sm text-white flex">
            @auth
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="text-sm text-white hover:text-dark-600">Logout</button>
                </form>
            @else
                <x-layout.nav-link link="/login">Login</x-layout.nav-link>
                <x-layout.nav-link link="/register">Register</x-layout.nav-link>
            @endauth
        </ul>
    </nav>
</div>
