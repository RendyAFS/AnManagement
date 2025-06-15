<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            'Jambon',
            'Krem',
            'Blewah',
            'Biru',
            'Coklat',
            'Kuning',
            'Hijau',
            'Ungu',
            'Merah',
        ];

        foreach ($colors as $color) {
            DB::table('colors')->insert([
                'name' => $color,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
