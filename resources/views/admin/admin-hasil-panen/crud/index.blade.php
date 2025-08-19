@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Data Hasil Panen & Luas Lahan</h4>
    <div class="row">
        {{-- Chart --}}
    <div class="card shadow-sm">
        <div class="card-body">
            <canvas id="hasilPanenChart" height="100"></canvas>
        </div>
    </div>
    </div>
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
                <th>Nomor Anggota</th>
                <th>Nama Anggota</th>
                <th>Tanggal</th>
                <th>Jumlah Hasil Panen (Ton)</th>
                <th>Luas Lahan (Ha)</th>
                <th>Harga per Kg (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hasilPanen as $row)
            <tr>
                <td>{{ $row->anggota->nomor_anggota }}</td>
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
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('hasilPanenChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: @json($dataChartHasilPanen['labels']),
        datasets: [
            {
                label: 'Jumlah Hasil Panen (ton)',
                data: @json($dataChartHasilPanen['panen']),
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                tension: 0.3
            },
            {
                label: 'Luas Lahan (ha)',
                data: @json($dataChartHasilPanen['luas']),
                borderColor: 'rgba(255, 159, 64, 1)',
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                borderWidth: 2,
                tension: 0.3
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'top' },
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endpush
@endsection
