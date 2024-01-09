@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mb-4 text-center">Detail Pelanggan</h1>

    <div class="card mt-4">
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item" style="background-color: #34495e; color: #fff;">
                    <strong>Nama:</strong> {{ $row->sewa_nama }}
                </li>
                <li class="list-group-item" style="background-color: #34495e; color: #fff;">
                    <strong>No Telepon:</strong> {{ $row->sewa_nohp }}
                </li>
                <li class="list-group-item" style="background-color: #34495e; color: #fff;">
                    <strong>Alamat:</strong> {{ $row->sewa_alamat }}
                </li>
                <li class="list-group-item" style="background-color: #34495e; color: #fff;">
                    <strong>Waktu Sewa:</strong> {{ $row->sewa_waktu }}
                </li>
                <li class="list-group-item" style="background-color: #34495e; color: #fff;">
                    <strong>Jenis Kost Yang Disewa:</strong> {{ $row->Category['cat_jenis'] }}
                </li>
                <li class="list-group-item" style="background-color: #34495e; color: #fff;">
                    <strong>Status Sewa:</strong>
                    @if ($row->sewa_status == '1')
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-danger">Nonaktif</span>
                    @endif
                </li>
                <li class="list-group-item" style="background-color: #34495e; color: #fff;">
                    <strong>Penerima Sewa:</strong> {{ $row->User['name'] }}
                </li>
            </ul>
        </div>
    </div>

    <a href="{{ url('/sewa') }}" class="btn btn-primary mt-3">Kembali</a>
</div>

@endsection
