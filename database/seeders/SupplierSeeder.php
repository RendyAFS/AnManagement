<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers =
            [
                'Sunar',
                'Yadi',
                'Bibit',
                'Santoso',
                'Mail',
                'Yanti',
                'Rusda',
                'Ahmad',
                'Sirajudin',
                'Udin',

            ];

        foreach ($suppliers as $supplier) {
            DB::table('suppliers')->insert([
                'name' => $supplier,
                'address' => 'Tulungaung',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
