@extends('layouts.app')
@section('content')
    @if (session('success'))
        <div class="container-fluid">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-input" role="tabpanel"
                                aria-labelledby="pills-input-tab">
                                <form class="theme-form" method="POST" enctype="multipart/form-data"
                                    action="{{ route('admin.galeri.update', $galeri->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3 draggable">
                                        <label for="input-file-1">Image
                                            Thumbnail</label>
                                        <input id="input-file-1" name="image" type="file">
                                    </div>
                                    <div class="mb-3 draggable">
                                        <label for="input-text-1">Title</label>
                                        <input class="form-control btn-square" id="input-text-1" type="text"
                                            value="{{ old('title', $galeri->title) ?? '' }}" placeholder="Isikan Title"
                                            name="title">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 draggable">
                                                <label for="select-1">Pilih Tipe
                                                    Galeri</label>
                                                <select class="form-control btn-square" id="namesas" name="type">
                                                    <option>Pilih Tipe</option>
                                                    <option {{ $galeri->type == 'video' ? 'selected' : '' }} value="1">
                                                        Video
                                                    </option>
                                                    <option {{ $galeri->type == 'image' ? 'selected' : '' }} value="2">
                                                        Foto
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="mb-3 draggable">
                                                <input class="form-control btn-square datasas" id="1" type="text"
                                                    name="link" value="{{ old('link', $galeri->link) ?? '' }}"
                                                    placeholder="Masukkan Link Video Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 draggable">
                                        <label for="input-text-1">Deskripsi</label>
                                        <Textarea class="form-control" name="deskripsi">{{ old('deskripsi', $galeri->deskripsi) ?? '' }}</Textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update
                                        data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#namesas').on('change', function() {
                    $('.datasas').hide();
                    $('#' + $(this).val()).fadeIn(700);
                }).change();
            });
        </script>
    @endpush
@endsection
