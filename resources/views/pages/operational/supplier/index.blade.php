@extends('layouts.app')

@push('scripts')
    @vite(['resources/js/pages/operational/supplier/main.js'])
@endpush

@section('container')
    <x-operational.modal-create title="Add Supplier" trigger="Supplier">
        {{-- <form action="{{ route('supplier.store') }}" method="POST"> --}}
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Supplier Name</label>
            <input type="text" name="name"
                class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring-1 focus:ring-secondary text-colordark"
                placeholder="Name" required>
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium">Address</label>
            <textarea name="address"
                class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring-1 focus:ring-secondary text-colordark" required></textarea>
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

    <table id="example" class="row-border hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 100; $i++)
                <tr>
                    <td>Employee {{ $i }}</td>
                    <td>Position {{ $i }}</td>
                    <td>Office {{ $i }}</td>
                    <td>{{ rand(20, 60) }}</td>
                    <td>{{ \Carbon\Carbon::now()->subDays(rand(1000, 5000))->format('Y-m-d') }}</td>
                    <td>${{ number_format(rand(50000, 500000)) }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection
