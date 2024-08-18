
@extends('layouts.template')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kategori</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <table border="1" cellpadding="2" cellspacing="0">
                <tr>
                    <th> ID</th>
                    <th> Kode Kategori</th>
                    <th> Nama Kategori</th>
                </tr>
        
                @foreach ($data as $d)
                    <tr>
                        <td> {{$d->kategori_id}}</td>
                        <td> {{$d->kategori_kode}}</td>
                        <td> {{$d->kategori_nama}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection