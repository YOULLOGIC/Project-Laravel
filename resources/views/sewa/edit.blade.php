@extends('layouts.app')

@section('content')
<div class="container">
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between">
                <h2 class="m-0 font-weight-bold text-primary">Edit Data Penyewa Kost</h2>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('sewa/' . $row->sewa_id) }}" method="post">
                <input type="hidden" name="_method" value="PATCH">
                @csrf
                <div class="mb-3">
                    <label for="sewa_nama" class="form-label">Nama</label>
                    <input type="text" name="sewa_nama" id="sewa_nama" class="form-control" value="{{ $row->sewa_nama }}">
                </div>
                <div class="mb-3">
                    <label for="sewa_nohp" class="form-label">No HP</label>
                    <input type="text" name="sewa_nohp" id="sewa_nohp" class="form-control" value="{{ $row->sewa_nohp }}">
                </div>
                <div class="mb-3">
                    <label for="sewa_alamat" class="form-label">Alamat</label>
                    <textarea name="sewa_alamat" id="sewa_alamat" class="form-control" rows="3">{{ $row->sewa_alamat }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="sewa_waktu" class="form-label">Waktu Sewa</label>
                    <input type="date" name="sewa_waktu" id="sewa_waktu" class="form-control" value="{{ $row->sewa_waktu }}">
                </div>
                <div class="mb-3">
                    <label for="sewa_id_cat" class="form-label">Jenis Kost</label>
                    <select name="sewa_id_cat" id="sewa_id_cat" class="form-control">
                        @foreach($categories as $Category)
                            <option value="{{ $Category->cat_id }}">{{ $Category->cat_jenis }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sewa_status" class="form-label">Status Sewa</label>
                    <select name="sewa_status" id="sewa_status" class="form-control">
                        <option value="1" @if($row->sewa_status == 1) selected @endif>Aktif</option>
                        <option value="0" @if($row->sewa_status == 0) selected @endif>Nonaktif</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sewa_id_user" class="form-label">Penerima</label>
                    <select name="sewa_id_user" id="sewa_id_user" class="form-control">
                        @foreach($user as $User)
                            <option value="{{ $User->id }}">{{ $User->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url('sewa') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
