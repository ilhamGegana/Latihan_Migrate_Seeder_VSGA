<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_kode' => 'KTG001', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'KTG002', 'kategori_nama' => 'Fashion'],
            ['kategori_kode' => 'KTG003', 'kategori_nama' => 'Peralatan Rumah'],
            ['kategori_kode' => 'KTG004', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'KTG005', 'kategori_nama' => 'Kesehatan'],
        ]);
    }
}
