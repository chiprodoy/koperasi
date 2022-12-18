@extends('layouts.app')
@section('content')
<div class="card">
    <form method="POST" action="{{ route($storeURL)}}">
        @csrf
        <div class="card-header">{{ $CURRENT_PAGE->title }}</div>
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
            <x-viho::form.magic :model="$modelRecords"/>
        </div>
        <div class="card-footer">
                <div class="col-md-3 offset-md-11">
                    <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                </div>
        </div>
    </form>
</div>
@endsection
