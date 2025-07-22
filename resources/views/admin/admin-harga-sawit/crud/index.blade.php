@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Data Harga Sawit</h4>

    <form class="row g-2 mb-3" method="GET" name='form-filter-data-harga-sawit'>
        <div class="col-md-3">
            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                <input type="text"  name="from" class="form-control" value="{{ request('from') }}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                <input type="text"  name="to" class="form-control" value="{{ request('to') }}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary" type="submit">Filter</button>
            <a href="{{ route('admin-harga-sawit.index') }}" class="btn btn-secondary">Reset</a>
        </div>
        <div class="col-md-3 text-end">
            <a href="{{ route('admin-harga-sawit.create') }}" class="btn btn-success">+ Tambah</a>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Komoditas</th>
                <th>Harga (Rp)</th>
                <th>Sumber</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataHargaSawit as $row)
                <tr>
                    <td>{{ $row->tgl_update_harga }}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td>{{ $row->komoditas->nama_komoditas }}</td>
                    <td>{{ number_format($row->harga, 0, ',', '.') }}</td>
                    <td>{{ $row->sumber }}</td>
                    <td>
                        <a href="{{ route('admin-harga-sawit.edit', $row->uuid) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin-harga-sawit.destroy', $row->uuid) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $dataHargaSawit->withQueryString()->links() }}
</div>
@endsection
