@extends('layouts.app')

@section('content')

<div class="card shadow">
    <h3 class="card-header py-3">Data User</h3>
    <div class="card-body">

    <table class="table table-striped table-bordered" id="dtb">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>HAPUS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>
            <form action="{{ url('user/' . $row->id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <input type="submit" value="Delete"class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
            </form>
        </td>
        @endforeach
    </tbody>
    </table>
</div>
</div>

@endsection