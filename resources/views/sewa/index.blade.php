@extends('layouts.app')

@section('content')

<div class="card shadow">
    <h3 class="card-header py-3">Data Penyewa Kost</h3>
    <div class="card-body">

<a href="{{ url('sewa/create') }}" class="btn btn-success mb-3">Tambah Data Penyewa</a>

<table class="table table-striped table-bordered" id="dtb">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NO HP</th>
            <th>ALAMAT</th>
            <th>WAKTU SEWA</th>
            <th>JENIS KOST</th>
            <th>STATUS SEWA</th>
            <th>PENERIMA</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->sewa_nama }}</td>
            <td>{{ $row->sewa_nohp }}</td>
            <td>{{ $row->sewa_alamat }}</td>
            <td>{{ $row->sewa_waktu }}</td>
            <td>{{ $row->Category['cat_jenis'] }}</td>
            <?php if ($row["sewa_status"] == '1'): ?>
                                <td>
                                    <span class="badge text-bg-success">Aktif</span>
                                </td>
                            <?php else: ?>
                                <td>
                                    <span class="badge text-bg-danger">Nonaktif</span>
                                </td>
                            <?php endif; ?>
            <td>{{ $row->User['name'] }}</td>
            <td><a href="{{ url('sewa/edit/' . $row->sewa_id) }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('sewa/' . $row->sewa_id) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <input type="submit" value="Delete"class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

@endsection