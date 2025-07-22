@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Edit Data Harga Sawit</h4>
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
    <form action="{{ route('admin-harga-sawit.update') }}" method="POST" name="form-edit-harga-sawit">
        @csrf
        @method('PUT')
        <input type="hidden" name="uuid" id="uuid" value="{{$RECORD->uuid}}"/>
        <input type="hidden" name="id" id="id" value="{{$RECORD->id}}"/>

            <div class="row g-6 py-3 mb-3">
                <div class="col-md-2">
                        <label for="komoditas_id" class="form-label">Komoditas</label>
                        <select name="komoditas_id" id="komoditas_id" class="form-control form-select @error('komoditas_id') is-invalid @enderror">
                            @foreach ($komoditas as $item)
                                <option
                                    {{($RECORD->komoditas_id==$item->id) ? 'selected' : ''}}
                                    value="{{$item->id}}">
                                    {{$item->nama_komoditas}}
                                </option>
                            @endforeach
                        </select>
                        @error('komoditas_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-md-2">
                        <label for="harga" class="form-label">Harga (Rp)</label>
                        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga',$RECORD->harga) }}">
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-md-2">
                    <label class="form-label">Tanggal</label>
                        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                        <input type="text"  name="tgl_update_harga" class="form-control" value="{{ old('tgl_update_harga',$RECORD->tgl_update_harga) }}">
                        <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                        @error('tgl_update_harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-md-8 mt-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{old('keterangan',$RECORD->keterangan) }}" />
                    @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-8 mb-3 mt-3">
                    <label for="sumber" class="form-label">Sumber</label>
                    <input type="text" name="sumber" class="form-control @error('sumber') is-invalid @enderror" value="{{old('sumber',$RECORD->sumber) }}" />
                    @error('sumber')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
        </div>

        <button class="btn btn-success" type="submit">Simpan</button>
        <a href="{{ route('admin-harga-sawit.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
