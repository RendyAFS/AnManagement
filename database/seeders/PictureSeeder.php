<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pictures = [
            'Robot',
            'Love',
            'Kipas',
            'Kelinci',
            'Beruang',
            'Angry Birds',
            'Bulan Bintang',
            'Flamboyan',
            'Kenangan',
            'Bawang',
            'Cempaka',
            'Raflesia',
            'Lotus',
            'Adenium',
            'Rosela',
            'Seruni',
            'Anggrek',
            'Semanggi',
            'Teratai',
            'Nusa Indah',
            'Matahari',
            'Bougenvil',
            'Aster',
            'Jasmin',
            'Dahlia',
            'Melati',
            'Mawar',
            'Sepatu',
            'Kuncup',
            'Sakura',
            'Mahkota',
            'Kamboja',
            'Lavender',
        ];

        foreach ($pictures as $picture) {
            DB::table('pictures')->insert([
                'name' => $picture,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
