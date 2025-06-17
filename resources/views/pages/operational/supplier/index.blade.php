<x-app-layout>

    <x-operational.modal-create title="Add Supplier" trigger="Supplier">
        {{-- <form action="{{ route('supplier.store') }}" method="POST"> --}}
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Supplier Name</label>
            <input type="text" name="name"
                class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring-1 focus:ring-secondary" required>
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium">Address</label>
            <textarea name="address" class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring-1 focus:ring-secondary" required></textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-4 py-2 bg-secondary text-fontlight rounded-lg hover:bg-primary flex gap-1 align-middle">
                <i data-lucide="save" class="w-5 h-5"></i>
                Save
            </button>
        </div>
        {{-- </form> --}}
    </x-operational.modal-create>

    <div>
        Page Supplier
    </div>

    <table id="myTable" class="min-w-full divide-y divide-gray-200 text-sm text-left text-gray-800">
        <thead class="bg-gray-100 text-xs uppercase text-gray-600">
            <tr>
                <th class="px-6 py-3">Nama</th>
                <th class="px-6 py-3">Email</th>
                <th class="px-6 py-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach (range(1, 20) as $i)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">User {{ $i }}</td>
                    <td class="px-6 py-4">user{{ $i }}@example.com</td>
                    <td class="px-6 py-4 text-center">
                        <button class="text-blue-500 hover:underline">Lihat</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    @push('scripts')
        <script>
            $(document).ready(function() {
                new DataTable('#myTable', {
                    responsive: true,
                    perPage: 10,
                    labels: {
                        placeholder: "Cari...",
                        perPage: "{select} data per halaman",
                        noRows: "Tidak ada data yang tersedia",
                        info: "Menampilkan {start} - {end} dari {rows} data",
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>
