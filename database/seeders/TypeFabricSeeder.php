<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFabricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type_fabrics =
            [
                'INT',
                'Biasa',
                'Febri',
                'HGT',
                'TC',
                'Lebar',
            ];

        foreach ($type_fabrics as $type_fabric) {
            DB::table('type_fabrics')->insert([
                'name' => $type_fabric,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
