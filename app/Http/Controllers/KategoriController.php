<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){
        //Menambah data
        // $data = [
        //     'kategori_kode'=>'SNK',
        //     'kategori_nama'=>'Scank/Makanan ringan',
        //     'created_at'=>now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Data berhasil ditambah';

        //Update data
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama'=>'Camilan']);
        // return 'Update data berhasil, jumlah data yang terupdate '.$row.' baris';

        // Hapus data
        // $data=DB::table('m_kategori')->where('kategori_kode','SNK')->delete();
        // return 'Delete data berhasil, Jumlah data yang dihapus '.$data.' baris';

        // Read data
        $breadcrumb = (object)[
            'title' => 'Daftar Kategori',
            'list' => ['Home', 'Kategori']
        ];
        $page = (object)[
            'title' => 'Daftar user yang terdaftar dalam sistem'
        ];
        $activeMenu = 'kategori'; //Set menu yang sedang aktif
        
        $data = DB::select('select * from m_kategori');
        return view('kategori',['data'=>$data, 'breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
        }
}
