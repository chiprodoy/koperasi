@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Edit Statistik</h4>
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
    <form action="{{ route('admin.statistik.update', $RECORD->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ old('slug', $RECORD->slug) }}" required>
        </div>
        <div class="mb-3">
            <label>Icon (class Font Awesome)</label>
            <input type="text" name="icon" class="form-control" value="{{ old('icon', $RECORD->icon) }}">
            <small class="text-muted">Contoh: fa-solid fa-user</small>
        </div>
        <div class="mb-3">
            <label>Label</label>
            <input type="text" name="label" class="form-control" value="{{ old('label', $RECORD->label) }}" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="text" name="jumlah" class="form-control" value="{{ old('jumlah', $RECORD->jumlah) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.statistik.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
