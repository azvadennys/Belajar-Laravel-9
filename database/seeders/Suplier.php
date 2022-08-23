<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Suplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suplier')->insert([
            [
                'nama_suplier' => 'Toko Sejahtera',
                'no_hp' => '082175831680',
                'email' => 'suplier1@gmail.com',
                'created_at' => now(),
            ],
            [
                'nama_suplier' => 'Toko Kito',
                'no_hp' => '0822414536630',
                'email' => 'tokokito@gmail.com',
                'created_at' => now(),
            ]
        ]);
    }
}
