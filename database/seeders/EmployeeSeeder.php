<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees =
            [
                'Agung',
                'Mambar',
                'Ipin',
                'Empi',
                'Rizal',
                'Agus',
                'Harno',
                'RikoA',
                'Mujib',
                'Irwan',
                'Yoga',
                'Adi',
                'Viki',
                'Arip',
                'Ayet',
                'Hegler',
                'Dadang',
                'RikoB',
            ];

        foreach ($employees as $employee) {
            DB::table('employees')->insert([
                'name' => $employee,
                'no_telp' => '+62',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
