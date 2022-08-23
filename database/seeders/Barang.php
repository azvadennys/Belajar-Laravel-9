<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            [
                'kategori_id' => 1,
                'suplier_id' => 1,
                'nama_barang' => 'Pensil',
                'harga_barang' => 10000,
                'created_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'suplier_id' => 2,
                'nama_barang' => 'Pisau',
                'harga_barang' => 30000,
                'created_at' => now(),
            ]
        ]);
    }
}
