@extends('layouts.template')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data level pengguna</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <table border="1" cellpadding="2" cellspacing="0">
                <tr>
                    <th> ID</th>
                    <th> Kode Penjualan</th>
                    <th> Nama Pembeli</th>
                </tr>

                @foreach ($data as $d)
                    <tr>
                        <td> {{ $d->penjualan_id }}</td>
                        <td> {{ $d->penjualan_kode }}</td>
                        <td> {{ $d->pembeli }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection