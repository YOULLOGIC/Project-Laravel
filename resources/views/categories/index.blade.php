@extends('layouts.app')
@section('content')

<div class="card shadow">
    <h4 class="card-header py-3">Jenis Kategori Kost</h4>
    <div class="card-body">

<a href="{{ url('categories/create') }}" class="btn btn-primary mb-3 float-end">Tambahkan Jenis Kategori Kost</a>

<table class="table table-striped table-bordered">
      <tr>
            <th>NO</th>
            <th>JENIS</th>
            <th>KETERANGAN</th>
            <th>HARGA</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $row->cat_jenis }}</td>
                  <td>{{ $row->cat_ket }}</td>
                  <td>{{ $row->cat_harga }}</td>
                  <td><a href="{{ url('categories/edit/' . $row->cat_id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('categories/' . $row->cat_id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection