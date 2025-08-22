@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Data Lahan Anggota</h4>

    <form method="GET" class="row g-3 mb-3">

        <div class="col-md-3">
            <label class="form-label">Nomor / Nama Anggota</label>
            <input type="text" name="keyword" class="form-control" />
        </div>
        <div class="col-md-5 d-flex align-items-end">
            <button type="submit" class="btn btn-primary me-2">Filter</button>
            {{-- <a href="{{ route('admin-hasil-panen.exportExcel', request()->all()) }}" class="btn btn-sm btn-success me-2">Download Excel</a> --}}
            {{-- <a href="{{ route('admin-hasil-panen.exportPdf', request()->all()) }}" class="btn btn-sm btn-danger">Download PDF</a> --}}
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nomor Anggota</th>
                <th>Nama Anggota</th>
                <th>Luas Lahan (Ha)</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataLahan as $row)
            <tr>
                <td>{{ $row->anggota->nomor_anggota }}</td>
                <td>{{ $row->anggota->nama }}</td>
                <td>{{ number_format($row->luas_lahan, 2) }}</td>
                <td>{{ $row->updated_at }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $dataLahan->links() }}


</div>

@endsection
