<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokController extends Controller
{
    public function index(){

    
        $breadcrumb = (object)[
            'title' => 'Daftar Stok',
            'list' => ['Home', 'Stok']
        ];
        $page = (object)[
            'title' => 'Daftar user yang terdaftar dalam sistem'
        ];
        $activeMenu = 'stok'; //Set menu yang sedang aktif
        
        $data = DB::select('select * from t_stok');
        return view('stok',['data'=>$data, 'breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
        }
}
