@extends('layouts.app')

@section('content')
<h2>Tambah Data Penyewa Kost</h2>

<form action="{{ url('sewa') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="sewa_nama" id="" class ="form-control">
    </div>
    <div class="mb-3">
        <label for="">NO HP</label>
        <input type="text" name="sewa_nohp" id="" class ="form-control">
    </div>
     <div class="mb-3">
        <label for="">ALAMAT</label>
        <textarea name="sewa_alamat" class="form-control" id="" cols="20" rows="5"></textarea>
    </div>
    <div class="mb-3">
        <label for="">WAKTU SEWA</label>
        <input type="date" name="sewa_waktu" id="" class ="form-control">
    </div>
    <div class="mb-3">
        <label for="sewa_id_cat" class="form-label">JENIS KOST <sup class="text-danger fw-bold">*</sup></label>
        <select name="sewa_id_cat" id="sewa_id_cat" class="form-control">
        @foreach($categories as $Category)
             <option value="{{ $Category->cat_id }}">{{ $Category->cat_jenis }}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="sewa_status" class="form-label">STATUS SEWA <sup class="text-danger fw-bold">*</sup></label>
        <select name="sewa_status" id="sewa_status" class="form-control">
            <option value="1">Aktif</option>
            <option value="0">Nonaktif</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="sewa_id_user" class="form-label">PENERIMA<sup class="text-danger fw-bold">*</sup></label>
        <select name="sewa_id_user" id="sewa_id_user" class="form-control">
        @foreach($user as $User)
             <option value="{{ $User->id }}">{{ $User->name }}</option>
        @endforeach
        </select>
    <div class="mb-4">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection