@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Tambah Kategori Jenis Kost</h2>
            </div>
            <div class="card-body">
                <form action="{{ url('categories') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="cat_jenis" class="form-label">JENIS</label>
                        <input type="text" name="cat_jenis" id="cat_jenis" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cat_ket" class="form-label">KETERANGAN</label>
                        <textarea name="cat_ket" class="form-control" id="cat_ket" cols="20" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cat_harga" class="form-label">HARGA</label>
                        <input type="text" name="cat_harga" id="cat_harga" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                        <a href="{{ url('categories') }}" class="btn btn-secondary">BATAL</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
