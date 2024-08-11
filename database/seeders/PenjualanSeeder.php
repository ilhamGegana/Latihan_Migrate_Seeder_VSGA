<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan')->insert([
            [
                'user_id' => 3,
                'pembeli' => 'Customer 1',
                'penjualan_kode' => 'TRA001',
                'penjualan_tanggal' => Carbon::now()->subDays(7),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Customer 2',
                'penjualan_kode' => 'TRA002',
                'penjualan_tanggal' => Carbon::now()->subDays(6),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Customer 3',
                'penjualan_kode' => 'TRA003',
                'penjualan_tanggal' => Carbon::now()->subDays(5),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Customer 4',
                'penjualan_kode' => 'TRA004',
                'penjualan_tanggal' => Carbon::now()->subDays(5),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Customer 5',
                'penjualan_kode' => 'TRA005',
                'penjualan_tanggal' => Carbon::now()->subDays(4),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Customer 6',
                'penjualan_kode' => 'TRA006',
                'penjualan_tanggal' => Carbon::now()->subDays(4),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Customer 7',
                'penjualan_kode' => 'TRA007',
                'penjualan_tanggal' => Carbon::now()->subDays(3),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Customer 8',
                'penjualan_kode' => 'TRA008',
                'penjualan_tanggal' => Carbon::now()->subDays(2),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Customer 9',
                'penjualan_kode' => 'TRA009',
                'penjualan_tanggal' => Carbon::now()->subDays(1),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Customer 10',
                'penjualan_kode' => 'TRA010',
                'penjualan_tanggal' => Carbon::now(),
            ],
        ]);
    }
}
