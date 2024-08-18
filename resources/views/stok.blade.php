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
                    <th> ID Stok</th>
                    <th> ID Barang</th>
                    <th> Jumlah stok</th>
                </tr>

                @foreach ($data as $d)
                    <tr>
                        <td> {{ $d->stok_id }}</td>
                        <td> {{ $d->barang_id }}</td>
                        <td> {{ $d->stok_jumlah }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection