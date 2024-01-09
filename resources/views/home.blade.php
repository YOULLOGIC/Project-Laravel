@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat datang di sistem pendataan kost-kost an') }}
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">{{ __('Data Dalam Sistem') }}</div>

                <div class="card-body">
                    <div class="dashboard-info">
                        <div class="section pelanggan">
                            <h4>Data Pelanggan</h4>
                            <p>Jumlah Pelanggan: {{ $totalPelanggan }}</p>
                            <button class="btn btn-primary mb-4" onclick="location.href='{{ url('sewa/') }}'">Lihat Detail Pelanggan</button>
                            <hr>
                        </div>

                        <div class="section users">
                            <h4>Data User</h4>
                            <p>Jumlah User: {{ $totalUsers }}</p>
                            <button class="btn btn-primary mb-4" onclick="location.href='{{ url('user/') }}'">Lihat Detail User</button>
                            <hr>
                        </div>

                        <div class="section jenis-kost">
                            <h4>Data Jenis Kost</h4>
                            <p>Jumlah Jenis Kost: {{ $totalJenisKost }}</p>
                            <button class="btn btn-primary mb-4" onclick="location.href='{{ url('categories/') }}'">Lihat Detail Jenis Kost</button>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
