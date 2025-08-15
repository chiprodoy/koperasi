@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Tambah Testimoni</h4>
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
             <div class="alert alert-primary">
                {{ session('response.message') }}
            </div>
        @endif
    <form action="{{ route('admin.testimoni.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
        </div>
        <div class="mb-3">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" value="{{ old('pekerjaan') }}" required>
        </div>
        <div class="mb-3">
            <label>Isi Testimoni</label>
            <textarea name="isi_testimoni" class="form-control" required>{{ old('isi_testimoni') }}</textarea>
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.testimoni.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
