@extends('layouts.app')
@section('content')
    @can('create', \App\Models\User::class)
        {{-- User Create --}}
        <div class="card">
            <form method="POST" action="{{ route($storeURL) }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">{{ $titleOfCreatePage }}</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>

                        <div class="input-group">
                            <span class="input-group-text"><i class="icon-email"></i></span>
                            <input type="email" class="form-control" id="email" name="email" value=""
                                placeholder="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_telpon" class="form-label">Nomor Telpon</label>
                        <input type="text" class="form-control" id="nomor_telpon" name="nomor_telpon" value=""
                            placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="icon-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" label="Password" placeholder="">
                            <div class="show-hide"><span class="show"> </span></div>
                        </div>
                    </div>
                    <input type="hidden" id="uuid" name="uuid" value="">
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
                                    <input type="checkbox" name="user_roles[]" class="form-check-input" value="{{$item->id}}">

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
    @endcan
@endsection
