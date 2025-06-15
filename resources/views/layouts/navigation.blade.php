<nav class="bg-white dark:bg-colordark drop-shadow-md py-4 px-2 flex justify-between sm:justify-end  transition-colors duration-500 ease-in-out">
    <div class="flex sm:hidden items-center justify-between">
        <img src="{{ asset('assets/logo-brand.png') }}" alt="Logo" class="h-8 w-auto me-2">
        <span class="text-xl font-bold">AnManagement</span>
    </div>
    <div class="flex justify-end items-center">
        <!-- Settings Dropdown -->
        <div class="sm:flex sm:items-center">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        <div class="flex">
                            <x-lucide-circle-user-round class="w-5 h-5 me-2" />
                            Profile
                        </div>
                    </x-dropdown-link>

                    <!-- Dark Mode Toggle -->
                    <div x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }" x-init="document.documentElement.classList.toggle('dark', darkMode)" class="flex sm:hidden px-4 py-2">
                        <label class="flex items-center gap-2 cursor-pointer text-sm">
                            <!-- Lucide Icon -->
                            <span class="text-gray-700 dark:text-gray-200">
                                <i x-show="!darkMode" data-lucide="sun" class="w-5 h-5" x-cloak></i>
                                <i x-show="darkMode" data-lucide="moon" class="w-5 h-5" x-cloak></i>
                            </span>

                            <!-- Toggle Switch -->
                            <div class="relative">
                                <input type="checkbox" class="sr-only" x-model="darkMode"
                                    @change="localStorage.setItem('theme', darkMode ? 'dark' : 'light'); document.documentElement.classList.toggle('dark', darkMode); lucide.createIcons();">
                                <div class="block w-10 h-6 bg-gray-300 rounded-full dark:bg-gray-600"></div>
                                <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"
                                    :class="darkMode ? 'translate-x-4' : ''"></div>
                            </div>
                        </label>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <div class="flex text-colorred font-bold">
                                <x-lucide-log-out class="w-5 h-5 me-2 text-re" />
                                Log out
                            </div>
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>


    <!-- Dark Mode Toggle -->
    <div x-data="{ darkMode: localStorage.getItem('theme') === 'dark' }" x-init="document.documentElement.classList.toggle('dark', darkMode)" class="hidden sm:flex px-4 py-2">

        <label class="flex items-center gap-2 cursor-pointer text-sm">
            <!-- Lucide Icon -->
            <span class="text-gray-700 dark:text-gray-200">
                <i x-show="!darkMode" data-lucide="sun" class="w-5 h-5" x-cloak></i>
                <i x-show="darkMode" data-lucide="moon" class="w-5 h-5" x-cloak></i>
            </span>

            <!-- Toggle Switch -->
            <div class="relative">
                <input type="checkbox" class="sr-only" x-model="darkMode"
                    @change="
        localStorage.setItem('theme', darkMode ? 'dark' : 'light');
        document.documentElement.classList.add('transition-theme'); // trigger animation
        setTimeout(() => {
            document.documentElement.classList[darkMode ? 'add' : 'remove']('dark');
            document.documentElement.classList.remove('transition-theme');
        }, 10);
        lucide.createIcons();
    ">

                <div class="block w-10 h-6 bg-gray-300 rounded-full dark:bg-gray-600"></div>
                <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"
                    :class="darkMode ? 'translate-x-4' : ''"></div>
            </div>
        </label>
    </div>
</nav>
