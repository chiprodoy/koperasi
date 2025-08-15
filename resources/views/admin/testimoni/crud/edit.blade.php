@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Edit Testimoni</h4>
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
    <form action="{{ route('admin.testimoni.update', $RECORD->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $RECORD->nama) }}" required>
        </div>
        <div class="mb-3">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" value="{{ old('pekerjaan', $RECORD->pekerjaan) }}" required>
        </div>
        <div class="mb-3">
            <label>Isi Testimoni</label>
            <textarea name="isi_testimoni" class="form-control" required>{{ old('isi_testimoni', $RECORD->isi_testimoni) }}</textarea>
        </div>
        <div class="mb-3">
            <label>Foto</label>
            @if($RECORD->photo)
                <div class="mb-2">
                    <img src="{{ asset('storage/'.$RECORD->photo) }}" alt="Foto" width="80">
                </div>
            @endif
            <input type="file" name="photo" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.testimoni.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
