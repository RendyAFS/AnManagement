<aside
    class="w-64 h-screen bg-colorlight text-fontdark dark:bg-colordark dark:text-fontlight drop-shadow-md hidden sm:flex flex-col ">
    <!-- Bagian atas (logo & search), dibuat fixed dengan shrink-0 -->
    <div class="shrink-0">
        <div class="p-4">
            <div class="flex items-center justify-between">
                <img src="{{ asset('assets/logo-brand.png') }}" alt="Logo" class="h-8 w-auto">
                <span class="text-xl font-bold">AnManagement</span>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="p-4">
            <div class="relative">
                <input type="text"
                    class="w-full bg-colorlightgrey rounded-lg pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-secondary border-1 border-colordarkgrey"
                    placeholder="Search...">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <x-lucide-search class="w-4 h-4 text-fontdark" />
                </div>
            </div>
        </div>
    </div>

    <nav class="overflow-y-auto flex-1 px-2 pb-4 space-y-4">
        <!-- Main Navigation -->
        <div class="space-y-4">
            <!-- Dashboard -->
            <div class="space-y-4">
                {{-- Dashboard --}}
                <a href="{{ route('dashboard') }}"
                    class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg
        bg-colorlight text-colordark dark:text-colorlight dark:bg-colordark
        group transition-all duration-200
        hover:bg-secondary hover:text-colorlight dark:hover:bg-secondary dark:hover:text-fontlight">
                    <x-lucide-layout-dashboard class="w-5 h-5 me-2" />
                    <span>Dashboard</span>
                </a>
            </div>

            <!-- Operational Dropdown -->
            <div x-data="{ open: true }" class="space-y-1">
                <!-- Dropdown Toggle -->
                <button @click="open = !open"
                    class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium rounded-md
        transition-all duration-200
        bg-colorlight text-colordark dark:text-colorlight dark:bg-colordark
        hover:bg-secondary hover:text-colorlight dark:hover:bg-secondary dark:hover:text-fontlight
        focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-opacity-50">
                    <div class="flex items-center">
                        <x-lucide-layout-list class="w-5 h-5 me-2" />

                        <span>Operational</span>
                    </div>
                    <svg :class="{ 'rotate-180': open }"
                        class="h-4 w-4 transform transition-transform duration-200 text-inherit"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" x-collapse class="space-y-1 pl-10 mt-1">
                    @php
                        $submenuClasses = 'flex items-center px-3 py-2 text-sm rounded-md transition-all duration-150';
                        $activeClass = 'bg-secondary text-white font-semibold';
                        $inactiveClass =
                            'text-colordark dark:text-colorlight hover:bg-secondary dark:hover:bg-secondaray hover:text-colorlight dark:hover:text-colorlight';
                    @endphp

                    <a href="{{ route('supplier') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('supplier') ? $activeClass : $inactiveClass }}">
                        Supplier
                    </a>

                    <a href="{{ route('fabric') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('fabric') ? $activeClass : $inactiveClass }}">
                        Fabric
                    </a>

                    <a href="{{ route('employee') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('employee') ? $activeClass : $inactiveClass }}">
                        Employee
                    </a>
                </div>
            </div>

            <!-- Configuration Dropdown -->
            <div x-data="{ open: true }" class="space-y-1">
                <!-- Dropdown Toggle -->
                <button @click="open = !open"
                    class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium rounded-md
        transition-all duration-200
        bg-colorlight text-colordark dark:text-colorlight dark:bg-colordark
        hover:bg-secondary hover:text-colorlight dark:hover:bg-secondary dark:hover:text-fontlight
        focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-opacity-50">
                    <div class="flex items-center">
                        <x-lucide-settings-2 class="w-5 h-5 me-2" />
                        <span>Configuration</span>
                    </div>
                    <svg :class="{ 'rotate-180': open }"
                        class="h-4 w-4 transform transition-transform duration-200 text-inherit"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" x-collapse class="space-y-1 pl-10 mt-1">
                    @php
                        $submenuClasses = 'flex items-center px-3 py-2 text-sm rounded-md transition-all duration-150';
                        $activeClass = 'bg-secondary text-white font-semibold';
                        $inactiveClass =
                            'text-colordark dark:text-colorlight hover:bg-secondary dark:hover:bg-secondaray hover:text-colorlight dark:hover:text-colorlight';
                    @endphp

                    <a href="{{ route('picture') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('picture') ? $activeClass : $inactiveClass }}">
                        Picture
                    </a>

                    <a href="{{ route('color') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('color') ? $activeClass : $inactiveClass }}">
                        Color
                    </a>

                    <a href="{{ route('type-fabric') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('type-fabric') ? $activeClass : $inactiveClass }}">
                        Type Fabric
                    </a>

                    <a href="{{ route('layer') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('layer') ? $activeClass : $inactiveClass }}">
                        Layer
                    </a>

                    <a href="{{ route('price') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('price') ? $activeClass : $inactiveClass }}">
                        Price
                    </a>
                </div>
            </div>

            <!-- History Dropdown -->
            <div x-data="{ open: true }" class="space-y-1">
                <!-- Dropdown Toggle -->
                <button @click="open = !open"
                    class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium rounded-md
        transition-all duration-200
        bg-colorlight text-colordark dark:text-colorlight dark:bg-colordark
        hover:bg-secondary hover:text-colorlight dark:hover:bg-secondary dark:hover:text-fontlight
        focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-opacity-50">
                    <div class="flex items-center">
                        <x-lucide-history class="w-5 h-5 me-2" />

                        <span>History</span>
                    </div>
                    <svg :class="{ 'rotate-180': open }"
                        class="h-4 w-4 transform transition-transform duration-200 text-inherit"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" x-collapse class="space-y-1 pl-10 mt-1">
                    @php
                        $submenuClasses = 'flex items-center px-3 py-2 text-sm rounded-md transition-all duration-150';
                        $activeClass = 'bg-secondary text-white font-semibold';
                        $inactiveClass =
                            'text-colordark dark:text-colorlight hover:bg-secondary dark:hover:bg-secondaray hover:text-colorlight dark:hover:text-colorlight';
                    @endphp

                    <a href="{{ route('sablon-history') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('sablon-history') ? $activeClass : $inactiveClass }}">
                        Sablons
                    </a>

                    <a href="{{ route('presence-history') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('presence-history') ? $activeClass : $inactiveClass }}">
                        Presence
                    </a>

                    <a href="{{ route('salary-history') }}"
                        class="{{ $submenuClasses }} {{ request()->routeIs('salary-history') ? $activeClass : $inactiveClass }}">
                        Salary
                    </a>
                </div>
            </div>
        </div>
    </nav>
</aside>


<script>
    // Dropdown functionality
    document.querySelectorAll('button[aria-controls]').forEach(button => {
        button.addEventListener('click', () => {
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            const dropdownContent = document.getElementById(button.getAttribute('aria-controls'));

            button.setAttribute('aria-expanded', !isExpanded);
            dropdownContent.classList.toggle('hidden');
            button.querySelector('svg:last-child').classList.toggle('rotate-180');
        });
    });
</script>
