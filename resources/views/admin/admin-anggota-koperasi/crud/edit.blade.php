@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3 class="mb-4">Edit Data Anggota</h3>
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
    <form action="{{ route('admin-anggota-koperasi.update') }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="uuid" id="uuid" value="{{$dataAnggota->uuid}}"/>

        <div class="row g-3">
            <div class="col-md-12">
                <label>Nomor Anggota</label>
                <input readonly placeholder="Kosongkan jika ingin nomor anggota dibuat otomatis oleh sistem" type="text" name="nomor_anggota" class="form-control @error('nomor_anggota') is-invalid @enderror" value="{{ old('nomor_anggota', $dataAnggota->nomor_anggota) }}">
                @error('nomor_anggota') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik', $dataAnggota->nik) }}" required>
                @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $dataAnggota->nama) }}" required>
                @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

                <div class="col-md-3">
                    <label>Tanggal Lahir</label>
                    <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                        <input type="text" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir',$dataAnggota->tgl_lahir) }}" required>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                    @error('tgl_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

            <div class="col-md-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror">
                    <option value="">-- Pilih --</option>
                    <option value="1" {{ old('jenis_kelamin', $dataAnggota->jenis_kelamin) == 1 ? 'selected' : '' }}>Laki-laki</option>
                    <option value="2" {{ old('jenis_kelamin', $dataAnggota->jenis_kelamin) == 2 ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label>Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control @error('nama_ibu') is-invalid @enderror" value="{{ old('nama_ibu', $dataAnggota->nama_ibu) }}">
                @error('nama_ibu') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control @error('telepon') is-invalid @enderror" value="{{ old('telepon', $dataAnggota->telepon) }}">
                @error('telepon') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ old('pekerjaan', $dataAnggota->pekerjaan) }}">
                @error('pekerjaan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label>Password</label>
                <input type="hidden" name="old_password" value="{{($dataAnggota->user) ? $dataAnggota->user->password : ''}}" />
                <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $dataAnggota->alamat) }}">
                @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-3">
                <label>Kelurahan</label>
                <input type="text" name="kelurahan" class="form-control" value="{{ old('kelurahan', $dataAnggota->kelurahan) }}">
            </div>

            <div class="col-md-3">
                <label>Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" value="{{ old('kecamatan', $dataAnggota->kecamatan) }}">
            </div>

            <div class="col-md-3">
                <label>Kota</label>
                <input type="text" name="kota" class="form-control" value="{{ old('kota', $dataAnggota->kota) }}">
            </div>

            <div class="col-md-3">
                <label>Provinsi</label>
                <input type="text" name="provinsi" class="form-control" value="{{ old('provinsi', $dataAnggota->provinsi) }}">
            </div>

            <div class="col-md-3">
                    <label>Tanggal Mulai Anggota</label>
                    <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                    <input type="text"  name="tgl_mulai_anggota" class="form-control" value="{{ old('tgl_mulai_anggota', $dataAnggota->tgl_mulai_anggota) }}">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
            </div>

            <div class="col-md-3">
                <label>Status Keanggotaan</label>
                <select name="status_keanggotaan" class="form-select">
                    <option value="1" {{ old('status_keanggotaan', $dataAnggota->status_keanggotaan) == 1 ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ old('status_keanggotaan', $dataAnggota->status_keanggotaan) == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>

            <div class="col-md-6">
                <label>Jenis Keanggotaan</label>
                <select name="jenis_keanggotaan" class="form-select">
                    <option value="1" {{ old('jenis_keanggotaan', $dataAnggota->jenis_keanggotaan) == 1 ? 'selected' : '' }}>Pengurus</option>
                    <option value="2" {{ old('jenis_keanggotaan', $dataAnggota->jenis_keanggotaan) == 2 ? 'selected' : '' }}>Anggota</option>
                </select>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin-anggota-koperasi.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
