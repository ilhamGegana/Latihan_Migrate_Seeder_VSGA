@extends('layouts.template')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data barang</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <table border="1" cellpadding="2" cellspacing="0">
                <tr>
                    <th> ID</th>
                    <th> Kode Barang</th>
                    <th> Nama Barang</th>
                    <th> Harga Beli</th>
                    <th> Harga Jual</th>
                </tr>

                @foreach ($data as $d)
                    <tr>
                        <td> {{ $d->barang_id }}</td>
                        <td> {{ $d->barang_kode }}</td>
                        <td> {{ $d->barang_nama }}</td>
                        <td> {{ $d->harga_beli }}</td>
                        <td> {{ $d->harga_jual }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection