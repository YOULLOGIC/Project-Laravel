@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Tambah Data Penyewa Kost</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('sewa') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="sewa_nama" class="form-label">NAMA</label>
                    <input type="text" name="sewa_nama" id="sewa_nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="sewa_nohp" class="form-label">NO HP</label>
                    <input type="text" name="sewa_nohp" id="sewa_nohp" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="sewa_alamat" class="form-label">ALAMAT</label>
                    <textarea name="sewa_alamat" id="sewa_alamat" class="form-control" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="sewa_waktu" class="form-label">WAKTU SEWA</label>
                    <input type="date" name="sewa_waktu" id="sewa_waktu" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="sewa_id_cat" class="form-label">JENIS KOST <sup class="text-danger fw-bold">*</sup></label>
                    <select name="sewa_id_cat" id="sewa_id_cat" class="form-control" required>
                        @foreach($categories as $Category)
                            <option value="{{ $Category->cat_id }}">{{ $Category->cat_jenis }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sewa_status" class="form-label">STATUS SEWA <sup class="text-danger fw-bold">*</sup></label>
                    <select name="sewa_status" id="sewa_status" class="form-control" required>
                        <option value="1">Aktif</option>
                        <option value="0">Nonaktif</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sewa_id_user" class="form-label">PENERIMA <sup class="text-danger fw-bold">*</sup></label>
                    <select name="sewa_id_user" id="sewa_id_user" class="form-control" required>
                        @foreach($user as $User)
                            <option value="{{ $User->id }}">{{ $User->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                    <a href="{{ url('sewa') }}" class="btn btn-secondary">BATAL</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
