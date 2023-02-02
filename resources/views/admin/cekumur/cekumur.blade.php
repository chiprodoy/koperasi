@extends('layouts.app')
@section('content')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/viho') }}/assets/css/datatables.css">
    @endpush
@if (session('success'))
<div class="container-fluid">
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
</div>
@endif
   <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-input" role="tabpanel"
                                            aria-labelledby="pills-input-tab">
                                            <form class="theme-form" method="POST"
                                                action="{{ route('cekumur.store') }}">
                                                @csrf
                                                <div class="mb-3 draggable">
                                                    <label for="select-1">Pilih Diktuk</label>
                                                    <select class="form-control btn-square" id="jenjang_pendidikan"
                                                        name="title">
                                                        <option>Pilih Tipe</option>
                                                        <option value="akpol">AKPOL</option>
                                                        <option value="sipss">SIPSS</option>
                                                        <option value="bintara">BINTARA</option>
                                                        <option value="tamtama">TAMTAMA</option>
                                                        <option value="cpnspolri">CPNS POLRI</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 draggable">
                                                    <label for="select-1">Pilih Jenjang</label>
                                                    <select class="form-control btn-square" id="jenis_syarat_id"
                                                        name="jenis_syarat_id">
                                                        <option>Pilih Tipe</option>
                                                        @foreach ($jenisSyarat as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="row d-flex">
                                                    <div class="col-md-4">
                                                        <div class="mb-3 draggable">
                                                            <label for="input-text-1">Tahun Pengecekan</label>
                                                            <input class="form-control btn-square" id="input-text-1"
                                                                type="text" placeholder="Isikan Tahun"
                                                                name="tahun_sekarang">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 draggable">
                                                            <label for="input-text-1">Min Tahun</label>
                                                            <input class="form-control btn-square" id="input-text-1"
                                                                type="text" placeholder="Isikan Tahun"
                                                                name="min_tahun">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 draggable">
                                                            <label for="input-text-1">Max Tahun</label>
                                                            <input class="form-control btn-square" id="input-text-1"
                                                                type="text" placeholder="Isikan Tahun"
                                                                name="max_tahun">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-flex">
                                                    <div class="col-md-4">
                                                        <div class="mb-3 draggable">
                                                            <label for="input-text-1">Bulan Pengecekan</label>
                                                            <input class="form-control btn-square" id="input-text-1"
                                                                type="text" placeholder="Isikan Bulan"
                                                                name="bulan_sekarang">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 draggable">
                                                            <label for="input-text-1">Min Bulan</label>
                                                            <input class="form-control btn-square" id="input-text-1"
                                                                type="text" placeholder="Isikan Bulan"
                                                                name="min_bulan">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 draggable">
                                                            <label for="input-text-1">Max Bulan</label>
                                                            <input class="form-control btn-square" id="input-text-1"
                                                                type="text" placeholder="Isikan Bulan"
                                                                name="max_bulan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-flex">
                                                    <div class="col-md-4">
                                                        <div class="mb-3 draggable">
                                                            <label for="input-text-1">Tanggal Sekarang</label>
                                                            <input class="form-control btn-square" id="input-text-1"
                                                                type="text" placeholder="Isikan Tanggal"
                                                                name="tanggal_sekarang">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 draggable">
                                                            <label for="input-text-1">Min Tanggal</label>
                                                            <input class="form-control btn-square" id="input-text-1"
                                                                type="text" placeholder="Isikan Tanggal"
                                                                name="min_tanggal">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3 draggable">
                                                            <label for="input-text-1">Max Tanggal</label>
                                                            <input class="form-control btn-square" id="input-text-1"
                                                                type="text" placeholder="Isikan Tanggal"
                                                                name="max_tanggal">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Tambah data</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5>Cek Umur Pakkepo</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="basic-1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>jenis diktuk</th>
                                                    <th>jenjang pendidikan</th>
                                                    <th>date</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cekumur as $index => $item)
                                                    <tr>
                                                        <td>{{ $index + 1 }}.</td>
                                                        <td>{{ $item->title }}.</td>
                                                        <td>
                                                            {{ $item->jenisSyarat->name }}
                                                        </td>
                                                        <td>
                                                            <div>
                                                                Tahun Pengecekan :
                                                                {{ $item->tahun_sekarang }}/{{ $item->bulan_sekarang }}/{{ $item->tanggal_sekarang }}
                                                            </div>
                                                            <div>
                                                                Min :
                                                                {{ $item->min_tahun }}/{{ $item->min_bulan }}/{{ $item->min_tanggal }}
                                                            </div>
                                                            <div>
                                                                Max :
                                                                {{ $item->max_tahun }}/{{ $item->max_bulan }}/{{ $item->max_tanggal }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#tooltipmodalUpdate{{ $item->id }}">Update</button>
                                                            <div class="modal fade"
                                                                id="tooltipmodalUpdate{{ $item->id }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="tooltipmodalUpdate"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-xl modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Apakah Kamu
                                                                                Yakin Ingin Hapus
                                                                                {{ $item->title }}</h5>
                                                                            <button class="btn-close" type="button"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form
                                                                            action="{{ route('cekumur.update', $item->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <div class="modal-body">
                                                                                <div class="mb-3 draggable">
                                                                                    <label for="select-1">Pilih
                                                                                        Diktuk</label>
                                                                                    <select
                                                                                        class="form-control btn-square"
                                                                                        id="jenjang_pendidikan"
                                                                                        name="title">
                                                                                        <option>Pilih Tipe</option>
                                                                                        <option
                                                                                            {{ $item->title == 'akpol' ? 'selected' : '' }}
                                                                                            value="akpol">AKPOL
                                                                                        </option>
                                                                                        <option
                                                                                            {{ $item->title == 'sipss' ? 'selected' : '' }}
                                                                                            value="sipss">SIPSS
                                                                                        </option>
                                                                                        <option
                                                                                            {{ $item->title == 'bintara' ? 'selected' : '' }}
                                                                                            value="bintara">BINTARA
                                                                                        </option>
                                                                                        <option
                                                                                            {{ $item->title == 'tamtama' ? 'selected' : '' }}
                                                                                            value="tamtama">TAMTAMA
                                                                                        </option>
                                                                                        <option
                                                                                            {{ $item->title == 'cpnspolri' ? 'selected' : '' }}
                                                                                            value="cpnspolri">CPNS
                                                                                            POLRI</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="mb-3 draggable">
                                                                                    <label for="select-1">Pilih
                                                                                        Jenjang</label>
                                                                                    <select
                                                                                        class="form-control btn-square"
                                                                                        id="jenis_syarat_id"
                                                                                        name="jenis_syarat_id">
                                                                                        <option>Pilih Tipe</option>
                                                                                        @foreach ($jenisSyarat as $items)
                                                                                            <option
                                                                                                {{ $item->jenis_syarat_id == $items->id ? 'selected' : '' }}
                                                                                                value="{{ $items->id }}">
                                                                                                {{ $items->name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <div class="row d-flex">
                                                                                    <div class="col-md-4">
                                                                                        <div class="mb-3 draggable">
                                                                                            <label for="input-text-1">
                                                                                                Tahun Sekarang</label>
                                                                                            <input
                                                                                                class="form-control btn-square"
                                                                                                id="input-text-1"
                                                                                                type="text"
                                                                                                placeholder="Isikan Tahun"
                                                                                                name="tahun_sekarang"
                                                                                                value="{{ old('tahun_sekarang', $item->tahun_sekarang) ?? '' }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="mb-3 draggable">
                                                                                            <label
                                                                                                for="input-text-1">Min
                                                                                                Tahun</label>
                                                                                            <input
                                                                                                class="form-control btn-square"
                                                                                                id="input-text-1"
                                                                                                type="text"
                                                                                                placeholder="Isikan Tahun"
                                                                                                name="min_tahun"
                                                                                                value="{{ old('min_tahun', $item->min_tahun) ?? '' }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="mb-3 draggable">
                                                                                            <label
                                                                                                for="input-text-1">Max
                                                                                                Tahun</label>
                                                                                            <input
                                                                                                class="form-control btn-square"
                                                                                                id="input-text-1"
                                                                                                type="text"
                                                                                                placeholder="Isikan Tahun"
                                                                                                name="max_tahun"
                                                                                                value="{{ old('max_tahun', $item->max_tahun) ?? '' }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row d-flex">
                                                                                    <div class="col-md-4">
                                                                                        <div class="mb-3 draggable">
                                                                                            <label for="input-text-1">
                                                                                                Bulan Sekarang</label>
                                                                                            <input
                                                                                                class="form-control btn-square"
                                                                                                id="input-text-1"
                                                                                                type="text"
                                                                                                placeholder="Isikan Bulan"
                                                                                                name="bulan_sekarang"
                                                                                                value="{{ old('bulan_sekarang', $item->bulan_sekarang) ?? '' }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="mb-3 draggable">
                                                                                            <label
                                                                                                for="input-text-1">Min
                                                                                                Bulan</label>
                                                                                            <input
                                                                                                class="form-control btn-square"
                                                                                                id="input-text-1"
                                                                                                type="text"
                                                                                                placeholder="Isikan Bulan"
                                                                                                name="min_bulan"
                                                                                                value="{{ old('min_bulan', $item->min_bulan) ?? '' }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="mb-3 draggable">
                                                                                            <label
                                                                                                for="input-text-1">Max
                                                                                                Bulan</label>
                                                                                            <input
                                                                                                class="form-control btn-square"
                                                                                                id="input-text-1"
                                                                                                type="text"
                                                                                                placeholder="Isikan Bulan"
                                                                                                name="max_bulan"
                                                                                                value="{{ old('max_bulan', $item->max_bulan) ?? '' }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row d-flex">
                                                                                    <div class="col-md-4">
                                                                                        <div class="mb-3 draggable">
                                                                                            <label for="input-text-1">
                                                                                                Tanggal Sekarang</label>
                                                                                            <input
                                                                                                class="form-control btn-square"
                                                                                                id="input-text-1"
                                                                                                type="text"
                                                                                                placeholder="Isikan Tanggal"
                                                                                                name="tanggal_sekarang"
                                                                                                value="{{ old('tanggal_sekarang', $item->tanggal_sekarang) ?? '' }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="mb-3 draggable">
                                                                                            <label
                                                                                                for="input-text-1">Min
                                                                                                Tanggal</label>
                                                                                            <input
                                                                                                class="form-control btn-square"
                                                                                                id="input-text-1"
                                                                                                type="text"
                                                                                                placeholder="Isikan Tanggal"
                                                                                                name="min_tanggal"
                                                                                                value="{{ old('min_tanggal', $item->min_tanggal) ?? '' }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="mb-3 draggable">
                                                                                            <label
                                                                                                for="input-text-1">Max
                                                                                                Tanggal</label>
                                                                                            <input
                                                                                                class="form-control btn-square"
                                                                                                id="input-text-1"
                                                                                                type="text"
                                                                                                placeholder="Isikan Tanggal"
                                                                                                name="max_tanggal"
                                                                                                value="{{ old('max_tanggal', $item->max_tanggal) ?? '' }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-secondary"
                                                                                    type="button"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button class="btn btn-primary"
                                                                                    type="submit">Update</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-danger btn-sm" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#tooltipmodal{{ $item->id }}">Delete</button>
                                                            <div class="modal fade"
                                                                id="tooltipmodal{{ $item->id }}" tabindex="-1"
                                                                role="dialog" aria-labelledby="tooltipmodal"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Apakah Kamu
                                                                                Yakin Ingin Hapus
                                                                                {{ $item->title }}</h5>
                                                                            <button class="btn-close" type="button"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form
                                                                            action="{{ route('cekumur.destroy', $item->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-secondary"
                                                                                    type="button"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button class="btn btn-primary"
                                                                                    type="submit">Hapus</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@push('scripts')
<script src="{{ asset('theme/viho/') }}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('theme/viho/') }}/assets/js/datatable/datatables/datatable.custom.js"></script>
        <script>
            $(document).ready(function() {
                $('#namesas').on('change', function() {
                    $('.datasas').hide();
                    $('#' + $(this).val()).fadeIn(700);
                }).change();
            });
        </script>
@endpush

@endsection