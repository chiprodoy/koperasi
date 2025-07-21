@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3>Detail Anggota</h3>
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $anggota->nomor_anggota }}</h5>

            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="col-md-12"><strong>Nama:</strong> {{ $anggota->nama }}</div>
                    <div class="col-md-12"><strong>Jenis Kelamin:</strong> {{ $anggota->jenis_kelamin == \App\Models\JenisKelamin::PRIA ? 'Pria' : 'Wanita' }}</div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6"><strong>Status Keanggotaan:</strong> {{ $anggota->status_keanggotaan ? 'Aktif' : 'Tidak Aktif' }}</div>
                    <div class="col-md-6"><strong>Jenis Keanggotaan:</strong> {{ $anggota->jenis_keanggotaan == 1 ? 'Pengurus' : 'Anggota' }}</div>
                    <div class="col-md-6"><strong>Tgl  Keanggotaan:</strong> {{ $anggota->tgl_mulai_anggota }}</div>
                </div>
            </div>

        </div>
    </div>

    {{-- Form Tambah Simpanan --}}
    <div class="card mb-4">
        <div class="card-header">
            <strong>Tambah Simpanan</strong>
        </div>
        <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
            @endif
            @if (session('response.message'))
                        <div class="alert alert-warning">
                            {{ session('response.message') }}
                        </div>
            @endif
            <form id="form_simpanan" name="form_simpanan" action="{{ route('admin-simpanan-anggota.store') }}" method="POST">
                @csrf
                <input type="hidden" name="anggota_id" id="anggota_id" value="{{$anggota->id}}" />
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="nominal">Nominal (Rp.)</label>
                        <input type="number" name="jumlah_simpanan" id="jumlah_simpanan" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label for="jenis_simpanan_id">Jenis Simpanan</label>
                        <select name="jenis_simpanan_id" class="form-select" required>
                            @foreach($dataJenisSimpanan as $jenis_simpanan)
                                <option value="{{ $jenis_simpanan->id }}">{{ $jenis_simpanan->nama_jenis_simpanan }}</option>
                            @endforeach
                        </select>
                    </div>
                    @can('modify','simpanan_anggotas.tgl_simpanan')

                    <div class="col-md-4">
                        <label>Tanggal</label>
                        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                        <input type="text"  name="tgl_simpanan" class="form-control" value="{{ old('tgl_simpanan') }}">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                    @else
                        <input value="" type="hidden" name="tgl_simpanan" class="form-control" required>
                    @endcan
                <div class="col-md-4 mt-4">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </div>

            </form>
        </div>
    </div>
    {{-- end form tambah simpanan --}}

    {{-- Simpanan Anggota --}}
    <h5 class="mb-2">Data Simpanan Anggota</h5>
    {{-- Form Filter --}}
    <form method="GET" class="row g-2 mb-3" name="form_filter_simpanan">
        <input type="hidden" id="id" name="id" value="{{$anggota->uuid}}" />
        <div class="col-md-3">
            <label>Tanggal Awal</label>
            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                <input type="text"  name="from" class="form-control" value="{{ request('from') }}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label>Tanggal Akhir</label>
            <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                <input type="text"  name="to" class="form-control" value="{{ request('to') }}">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label>Jenis Simpanan</label>
            <select name="filter_jenis_simpanan_id" class="form-select">
                <option value="">Semua Jenis</option>
                @foreach($dataJenisSimpanan as $jenis)
                    <option value="{{ $jenis->id }}" {{ request('jenis_simpanan_id') == $jenis->id ? 'selected' : '' }}>
                        {{ $jenis->nama_jenis_simpanan }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3 align-self-end">
            <button class="btn btn-primary" type="submit">Filter</button>
            <a href="{{ route('admin-simpanan-anggota.index', $anggota->id) }}" class="btn btn-secondary">Reset</a>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>Tanggal</th>
                    <th>Jenis Simpanan</th>
                    <th>Nominal</th>
                    @canany(['update', 'delete'], App\Models\Simkop\SimpananAnggota::class)
                        <th>Aksi</th>
                    @endcanany
                </tr>
            </thead>
            <tbody>
                @forelse ($dataSimpanan as $simpanan)
                    <tr>
                        <td>{{ $simpanan->tgl_simpanan }}</td>
                        <td>{{ $simpanan->jenisSimpanan->nama_jenis_simpanan }}</td>
                        <td>Rp {{ number_format($simpanan->jumlah_simpanan, 0, ',', '.') }}</td>
                        <td>
                            @can('update',App\Models\Simkop\SimpananAnggota::class)
                                <a href="{{ route('admin-simpanan-anggota.edit', [$anggota->id, $simpanan->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                            @endcan
                            @can('delete',App\Models\Simkop\SimpananAnggota::class)
                                <form action="{{ route('admin-simpanan-anggota.destroy', [$anggota->id, $simpanan->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Hapus simpanan ini?')" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            @endcan

                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center">Belum ada data simpanan</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <a href="{{ route('admin-anggota-koperasi.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Anggota</a>
</div>
@endsection
