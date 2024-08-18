<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index(){

    
        $breadcrumb = (object)[
            'title' => 'Daftar Penjualan',
            'list' => ['Home', 'Penjualan']
        ];
        $page = (object)[
            'title' => 'Daftar user yang terdaftar dalam sistem'
        ];
        $activeMenu = 'penjualan'; //Set menu yang sedang aktif
        
        $data = DB::select('select * from t_penjualan');
        return view('penjualan',['data'=>$data, 'breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
        }
}
