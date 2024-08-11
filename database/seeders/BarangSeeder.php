<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->insert([
            ['barang_kode' => 'BRG001', 'barang_nama' => 'Laptop', 'kategori_id' => 1, 'harga_beli' => 5000000, 'harga_jual' => 6000000],
            ['barang_kode' => 'BRG002', 'barang_nama' => 'Smartphone', 'kategori_id' => 1, 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['barang_kode' => 'BRG003', 'barang_nama' => 'Baju', 'kategori_id' => 2, 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_kode' => 'BRG004', 'barang_nama' => 'Sepatu', 'kategori_id' => 2, 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['barang_kode' => 'BRG005', 'barang_nama' => 'Microwave', 'kategori_id' => 3, 'harga_beli' => 800000, 'harga_jual' => 1000000],
            ['barang_kode' => 'BRG006', 'barang_nama' => 'Blender', 'kategori_id' => 3, 'harga_beli' => 300000, 'harga_jual' => 350000],
            ['barang_kode' => 'BRG007', 'barang_nama' => 'Roti', 'kategori_id' => 4, 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_kode' => 'BRG008', 'barang_nama' => 'Minuman', 'kategori_id' => 4, 'harga_beli' => 5000, 'harga_jual' => 10000],
            ['barang_kode' => 'BRG009', 'barang_nama' => 'Vitamin', 'kategori_id' => 5, 'harga_beli' => 50000, 'harga_jual' => 70000],
            ['barang_kode' => 'BRG010', 'barang_nama' => 'Masker', 'kategori_id' => 5, 'harga_beli' => 2000, 'harga_jual' => 5000],
        ]);
    }
}
