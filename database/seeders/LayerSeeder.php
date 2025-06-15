<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layers = [
            '1 Warna',
            '2 Warna',
            '3 Warna',
        ];

        foreach ($layers as $layer) {
            DB::table('layers')->insert([
                'name' => $layer,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
