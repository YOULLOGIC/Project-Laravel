@extends('layouts.app')

@section('content')

<div class="card shadow">
    <h4 class="card-header py-3">Jenis Kategori Kost</h4>
    <div class="card-body">

        <a href="{{ url('categories/create') }}" class="btn btn-primary mb-3 float-end">Tambah Jenis Kost</a>

        <div class="mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Cari...">
        </div>

        <table class="table table-striped table-bordered" id="dtb">
            <thead class="text-center">
                <tr>
                    <th>NO</th>
                    <th>JENIS</th>
                    <th>KETERANGAN</th>
                    <th>HARGA</th>
                    <th>AKSI</th> <!-- Mengganti judul kolom "EDIT" dan "HAPUS" menjadi "AKSI" -->
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->cat_jenis }}</td>
                    <td>{{ $row->cat_ket }}</td>
                    <td>{{ $row->cat_harga }}</td>
                    <td class="text-center">
                        <a href="{{ url('categories/edit/' . $row->cat_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('categories/' . $row->cat_id) }}" method="post" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
