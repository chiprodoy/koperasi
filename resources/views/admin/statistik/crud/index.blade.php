@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Data Statistik</h4>

    <a href="{{ route('admin.statistik.create') }}" class="btn btn-success mb-3">+ Tambah Statistik</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Icon</th>
                <th>Slug</th>
                <th>Label</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($RECORD as $row)
            <tr>
                <td>
                    @if($row->icon)
                        <i class="{{ $row->icon }}"></i> {{ $row->icon }}
                    @else
                        -
                    @endif
                </td>
                <td>{{ $row->slug }}</td>
                <td>{{ $row->label }}</td>
                <td>{{ $row->jumlah }}</td>
                <td>
                    <a href="{{ route('admin.statistik.edit', $row->uuid) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.statistik.destroy', $row->uuid) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
