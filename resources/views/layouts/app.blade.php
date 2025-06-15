<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data x-init="if (localStorage.getItem('theme') === 'dark') {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AnManagemen') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Theme Init Script (harus di atas CSS) -->
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    {{-- Lucide Icon --}}
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="font-sans antialiased bg-lightmode-background text-fontdark dark:bg-darkmode-background dark:text-fontlight h-screen overflow-hidden">
    <div class="flex h-full">
        <!-- Sidebar (tetap fix dan tidak ikut scroll) -->
        @include('layouts.sidebar')

        <!-- Konten utama -->
        <div class="flex-1 flex flex-col h-full overflow-hidden">
            <!-- Navbar (tetap di atas) -->
            @include('layouts.navigation')

            <!-- Main Content (scrollable area) -->
            <main class="flex-1 overflow-y-auto p-6">
                {{ $slot }}
                @include('layouts.menu')
            </main>
        </div>
    </div>

    <!-- Lucide Icon -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            lucide.createIcons();
        });
    </script>
</body>


</html>
