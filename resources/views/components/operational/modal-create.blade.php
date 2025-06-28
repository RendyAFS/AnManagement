<div x-data="{ open: false }" {{ $attributes }}>
    <div class="flex justify-end">
        <!-- Trigger -->
        <button @click="open = true" type="button"
            class="px-4 py-2 flex gap-1 align-middle bg-secondary text-fontlight font-bold rounded-lg hover:bg-primary transition duration-300 ease-in-out">
            <i data-lucide="plus" class="w-5 h-5"></i>
            {{ $trigger ?? 'Data' }}
        </button>
    </div>

    <!-- Overlay (fade only) -->
    <div x-show="open" x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-colorlight dark:bg-colordark bg-opacity-30 dark:bg-opacity-30 z-40"
        @click="open = false" style="display: none">
    </div>

    <!-- Modal (fade + zoom) -->
    <div x-show="open" x-transition:enter="transition duration-300 transform ease-out"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition duration-200 transform ease-in" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95" class="fixed inset-0 flex items-start mt-20 justify-center z-50"
        style="display: none">
        <div @click.away="open = false"
            class="bg-colorlight dark:bg-colordark w-full max-w-lg p-6 rounded-lg shadow-lg">
            <!-- Header -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">{{ $title ?? 'Modal Title' }}</h2>
                <button @click="open = false" class="text-colordarkgrey dark:text-colorlight">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Content -->
            <div class="space-y-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
