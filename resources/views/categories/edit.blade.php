@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">Edit Data Kategori Jenis Kost</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('categories/' . $row->cat_id) }}" method="post">
                <input type="hidden" name="_method" value="PATCH">
                @csrf
                <div class="mb-3">
                    <label for="cat_jenis" class="form-label">JENIS</label>
                    <input type="text" name="cat_jenis" id="cat_jenis" class="form-control" value="{{ $row->cat_jenis }}">
                </div>
                <div class="mb-3">
                    <label for="cat_ket" class="form-label">KETERANGAN</label>
                    <textarea name="cat_ket" class="form-control" id="cat_ket" cols="20" rows="5">{{ $row->cat_ket }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="cat_harga" class="form-label">HARGA</label>
                    <input type="text" name="cat_harga" id="cat_harga" class="form-control" value="{{ $row->cat_harga }}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    <a href="{{ url('categories') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
