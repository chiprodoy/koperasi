@extends('layouts.app')
@section('content')
<div class="card">
    <form method="POST" action="{{ route_from($updateURL,$RECORD) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $RECORD->name }}" placeholder=""/>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>

                <div class="input-group">
                    <span class="input-group-text"><i class="icon-email"></i></span>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $RECORD->email }}"
                        placeholder="">
                </div>
            </div>
            <div class="mb-3">
                <label for="nomor_telpon" class="form-label">Nomor Telpon</label>
                <input type="text" class="form-control" id="nomor_telpon" name="nomor_telpon" value="{{ $RECORD->nomor_telpon }}"
                    placeholder="">
            </div>
            <input type="hidden" id="password" name="password" value="" />
            <input type="hidden" id="uuid" name="uuid" value="{{ $RECORD->uuid }}" />
            <table class="table vihoCheckBoxGroup  table-hover" id="user_roles">
                <thead>
                    <tr>
                        <th width="2%"><input type="checkbox" id="checkAll"></th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $item)
                    <tr>
                        <td scope="row">
                            <input
                            type="checkbox"
                            name="user_roles[]"
                            class="form-check-input"
                            value="{{$item->id}}"
                            @foreach ($curentUserRoles as $cr)
                                @if ($cr->id==$item->id)
                                    checked="checked"
                                @endif
                            @endforeach
                            />
                        </td>
                        <td>{{$item->role_name}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="card-footer">
            <div class="col-md-3 offset-md-11">
                <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>

</div>

@endsection
