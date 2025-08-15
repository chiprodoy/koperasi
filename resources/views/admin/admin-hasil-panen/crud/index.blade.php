@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Data Hasil Panen</h4>

    <form method="GET" class="row g-3 mb-3">
        <div class="col-md-2">
            <label class="form-label">Tanggal Mulai</label>
             <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                <input type="text"  name="start_date" class="form-control" value="{{ request('start_date') }}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <label class="form-label">Tanggal Selesai</label>
            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                <input type="text"  name="end_date" class="form-control" value="{{ request('end_date') }}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
                <div class="col-md-3">
            <label class="form-label">Nama Anggota</label>
            <select name="anggota_id" class="form-control">
                <option value="">-- Semua Anggota --</option>
                @foreach($anggotas as $anggota)
                    <option value="{{ $anggota->id }}" {{ request('anggota_id') == $anggota->id ? 'selected' : '' }}>
                        {{ $anggota->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-5 d-flex align-items-end">
            <button type="submit" class="btn btn-primary me-2">Filter</button>
            <a href="{{ route('admin-hasil-panen.exportExcel', request()->all()) }}" class="btn btn-sm btn-success me-2">Download Excel</a>
            {{-- <a href="{{ route('admin-hasil-panen.exportPdf', request()->all()) }}" class="btn btn-sm btn-danger">Download PDF</a> --}}
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama Anggota</th>
                <th>Tanggal Panen</th>
                <th>Jumlah Hasil Panen (Kg)</th>
                <th>Luas Lahan (Ha)</th>
                <th>Harga per Kg (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hasilPanen as $row)
            <tr>
                <td>{{ $row->anggota->nama }}</td>
                <td>{{ $row->tgl_panen }}</td>
                <td>{{ number_format($row->jumlah_hasil_panen, 2) }}</td>
                <td>{{ number_format($row->luas_lahan, 2) }}</td>
                <td>{{ number_format($row->harga_per_kg, 0) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $hasilPanen->links() }}
</div>
@endsection
