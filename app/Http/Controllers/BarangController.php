<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Daftar Barang',
            'list' => ['Home', 'Barang']
        ];
        $page = (object)[
            'title' => 'Daftar barang yang terdaftar dalam sistem'
        ];
        $activeMenu = 'barang'; //Set menu yang sedang aktif
        
        $data = DB::select('select * from m_barang');
        return view('barang',['data'=>$data, 'breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
        }
}
