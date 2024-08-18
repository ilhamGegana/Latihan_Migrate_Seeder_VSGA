@extends('layouts.template')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data User</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <table border="1" cellpadding="2" cellspacing="0">
                <tr>
                    <th> ID User</th>
                    <th> Kode User</th>
                    <th> Nama User</th>
                </tr>

                @foreach ($data as $d)
                    <tr>
                        <td> {{ $d->user_id }}</td>
                        <td> {{ $d->username }}</td>
                        <td> {{ $d->nama }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection