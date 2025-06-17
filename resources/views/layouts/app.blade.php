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

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo-ico.ico') }}">

    <title>{{ config('app.name', 'AnManagement') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- DataTables v2.3.2 CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.4/css/responsive.dataTables.css">

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
    class="font-sans antialiased h-screen overflow-hidden
           bg-lightmode-background text-fontdark dark:bg-darkmode-background dark:text-fontlight
           transition-colors duration-500 ease-in-out">

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
            @include('layouts.footer')
        </div>
    </div>

    <!-- Lucide Icon -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            lucide.createIcons();
        });
    </script>

    <!-- jQuery CDN -->
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- DataTables v2.3.2 JS -->
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.4/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.4/js/responsive.dataTables.js"></script>

    @stack('scripts')
</body>

</html>
