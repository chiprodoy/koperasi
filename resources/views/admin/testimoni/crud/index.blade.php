@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Data Testimoni</h4>

    <a href="{{ route('admin.testimoni.create') }}" class="btn btn-success mb-3">+ Tambah Testimoni</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Isi Testimoni</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($RECORD as $row)
            <tr>
                <td>
                    @if($row->photo)
                        <img src="{{ $row->photo }}" alt="Foto" width="80">
                    @else
                        -
                    @endif
                </td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->pekerjaan }}</td>
                <td>{{ $row->isi_testimoni }}</td>
                <td>
                    <a href="{{ route('admin.testimoni.edit', $row->uuid) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.testimoni.destroy', $row->uuid) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus testimoni ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
