<div x-data="{ isOpen: false }">
    <!-- Button Trigger -->
    <button @click="isOpen = true"
        class="fixed bottom-3 right-3 bg-colordark text-colorlight dark:bg-colorlight dark:text-colordark p-3 rounded-full z-50">
        <x-lucide-menu class="w-5 h-5" />
    </button>

    <!-- Modal Overlay -->
    <div x-show="isOpen" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50 z-40"
        @click.self="isOpen = false"></div>

    <!-- Modal Content -->
    <div x-show="isOpen" x-transition class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-30"
        @keydown.escape.window="isOpen = false">


        <!-- Modal Box -->
        <div class="bg-white dark:bg-colordark rounded-xl shadow-lg w-80 max-h-[90vh] overflow-y-auto p-4">
            <!-- Close button -->
            <div class="flex justify-between items-center me-2 mb-4">
                <img src="{{ asset('assets/logo-brand.png') }}" alt="Logo" class="h-8 w-auto">
                <h2 class="text-lg font-semibold text-colordark dark:text-colorlight">Menu</h2>
                <button @click="isOpen = false" class="text-gray-500 hover:text-red-500">
                    <x-lucide-x class="w-5 h-5" />
                </button>
            </div>

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
                            $submenuClasses =
                                'flex items-center px-3 py-2 text-sm rounded-md transition-all duration-150';
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
                            $submenuClasses =
                                'flex items-center px-3 py-2 text-sm rounded-md transition-all duration-150';
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
                            $submenuClasses =
                                'flex items-center px-3 py-2 text-sm rounded-md transition-all duration-150';
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
        </div>
    </div>
</div>
