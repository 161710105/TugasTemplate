<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
         ['Kode_barang'=>'1317','Nama_barang'=>'Snack Kita'],
        ];
        DB::Table('barang')->insert($barang);
    }
}
