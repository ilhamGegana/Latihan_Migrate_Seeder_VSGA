<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Daftar User',
            'list' => ['Home', 'User']
        ];
        $page = (object)[
            'title' => 'Daftar user yang terdaftar dalam sistem'
        ];
        $activeMenu = 'user'; //Set menu yang sedang aktif
        
        $data = DB::select('select * from m_user');
        return view('user',['data'=>$data, 'breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
        }
}
