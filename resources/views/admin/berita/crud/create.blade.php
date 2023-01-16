@extends('layouts.app')
@section('content')
    @can('create', [\App\Models\Post::class, $modName])
        {{-- Berita Create --}}
        <div class="card">
            <form method="POST" action="{{ route($storeURL,$modName) }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">Tambah Konten</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" value="" placeholder="">
                    </div>



                    <div class="mb-3">
                        <label for="description" class="form-label">Isi</label>
                        <textarea class="form-control ckeditor" id="description" name="description" placeholder=""></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="attachment" class="form-label">Lampiran</label>
                        <input type="file" class="form-control" id="attachment" name="attachment" placeholder="">

                    </div>

                    <div class="mb-3">
                        <label for="cover" class="form-label">Gambar Sampul</label>
                        <input type="file" class="form-control" id="cover" name="cover" placeholder="">

                    </div>
                    <div class="mb-3">
                        <label for="post_status" class="form-label">Status</label>
                        <select id="post_status" name="post_status" class="form-select">
                            <option value="">Silahkan Pilih</option>
                            <option value="draft">draft</option>
                            <option value="publish">publish</option>
                        </select>
                    </div>
                    <input type="hidden" id="post_type" name="post_type" value="blog">
                    <input type="hidden" id="slug" name="slug" value="">


                    <input type="hidden" id="uuid" name="uuid" value="">
                    <input type="hidden" id="tags" name="tags" value="">
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
                                        <input type="checkbox" name="post_category[]" class="form-check-input" value="{{$item->id}}">
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
                    <div class="col-md-3 offset-md-11">
                        <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
            @push('scripts')
            <script type="text/javascript">
                CKEDITOR.replace('description', {
                    filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });
            </script>
            @endpush
    @endcan
@endsection
