<?php

use Illuminate\Database\Seeder;
use App\barang;

class barangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        barang::create([
            'nama_barang' => 'Service'
        ]);

        barang::create([
            'nama_barang' => 'Oli'
        ]);

        barang::create([
            'nama_barang' => 'Filter Udara'
        ]);

        barang::create([
            'nama_barang' => 'Lampu'
        ]);

        barang::create([
            'nama_barang' => 'Busi'
        ]);

        barang::create([
            'nama_barang' => 'Ban'
        ]);

        barang::create([
            'nama_barang' => 'Bearing'
        ]);
    }
}
