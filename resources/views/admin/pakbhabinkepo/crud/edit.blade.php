@extends('layouts.app')
@section('content')
<div class="card">
    <form method="POST" action="{{ route_from($updateURL,$RECORD)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-header">
            <div class="row">
                <div class="col-auto me-auto">
                    <h5>{{ $CURRENT_PAGE->title }}</h5>
                </div>
                <div class="col-auto">
                    <button class="btn btn-sm btn-primary" type="submit" id="btnSaveUpdate">Simpan Perubahan</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (Session::has('response.message'))
                <x-viho::alert id="alert_notif" class="alert-info">
                    @foreach (Session::get('response') as $item)
                        {{ $item }}
                    @endforeach
                </x-viho::alert>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
         @include('admin.berita.components.form.magic')
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-auto me-auto">
                    <a href="{{ route_from($indexURL)}}" class="btn btn-sm btn-secondary">Kembali</a>
                </div>
                <div class="col-auto">
                    <button class="btn btn-sm btn-primary" type="submit" id="btnSaveUpdate">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
