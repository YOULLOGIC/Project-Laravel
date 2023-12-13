@extends('layouts.app')

@section('content')
    <h2>Tambah Kategori Jenis Kost</h2>

    <form action="{{ url('categories') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">JENIS</label>
            <input type="text" name="cat_jenis" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">KETERANGAN</label>
            <textarea name="cat_ket" class="form-control" id="" cols="20" rows="5"></textarea>
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="cat_harga" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
