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
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $RECORD->title}}" placeholder="">
            </div>



            <div class="mb-3">
                <label for="description" class="form-label">Isi</label>
                <textarea class="form-control" id="description" name="description" placeholder="">{{ $RECORD->description}}</textarea>
            </div>

            <div class="mb-3">
                <label for="attachment" class="form-label">Lampiran</label>
                <input type="file" class="form-control" id="attachment" name="attachment" placeholder="">

            </div>

            <div class="mb-3">
                <label for="cover" class="form-label">Gambar Sampul</label>
                <input type="file" class="form-control" id="cover" name="cover" placeholder="">

            </div>
            @if (Auth::user()->isRole(\App\Models\Role::SUPERADMIN) || Auth::user()->isRole(\App\Models\Role::ADMIN))
                <div class="mb-3">
                    <label for="post_status" class="form-label">Status</label>
                    <select id="post_status" name="post_status" class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="draft">draft</option>
                        <option value="publish">publish</option>
                    </select>
                </div>
            @else
                <input type="hidden" id="post_status" name="post_status" value="draft">
            @endif

            <input type="hidden" id="post_type" name="post_type" value="blog">
            <input type="hidden" id="slug" name="slug" value="{{ $RECORD->slug}}">


            <input type="hidden" id="uuid" name="uuid" value="{{ $RECORD->uuid}}">
            <input type="hidden" id="tags" name="tags" value="{{ $RECORD->tags}}">
            <input type="hidden" name="modname" id="modname" value="{{$modName}}">


            <strong>Pilih</strong>
            <table class="table vihoCheckBoxGroup  table-hover" id="post_category">

                <tbody>
                    @foreach ($postCategories as $item)
                        @if ($item->slugs==$modName)
                            <input type="hidden" name="post_category[]" class="form-check-input" value="{{$item->id}}">
                        @else
                        <tr>
                            <td scope="row" width='1'>
                                <input type="checkbox"
                                    name="post_category[]"
                                    class="form-check-input"
                                    value="{{$item->id}}"
                                    @foreach ($RECORD->categories as $p)
                                        @if($p->id==$item->id)
                                            checked='checked'
                                        @endif
                                    @endforeach
                                />
                            </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                        </tr>
                        @endif

                    @endforeach
                </tbody>

            </table>
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
