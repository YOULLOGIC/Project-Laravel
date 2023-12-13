@extends('layouts.app')

@section('content')
    <h2>Edit Jenis Kategori Kost</h2>

    <form action="{{ url('categories/' . $row->cat_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">JENIS</label>
            <input type="text" name="cat_jenis" id="" class="form-control" value="{{ $row->cat_jenis }}">
        </div>
        <div class="mb-3">
            <label for="">KETERANGAN</label>
            <textarea name="cat_ket" class="form-control" id="" cols="20" rows="5">{{ $row->cat_ket }}</textarea>
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="cat_harga" id="" class="form-control" value="{{ $row->cat_harga }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
