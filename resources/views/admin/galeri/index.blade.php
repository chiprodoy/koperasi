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
                            action="{{ route('admin.galeri.store') }}">
                            @csrf
                            <div class="mb-3 draggable">
                                <label for="input-file-1">Image Thumbnail</label>
                                <input id="input-file-1" name="image" type="file">
                            </div>
                            <div class="mb-3 draggable">
                                <label for="input-text-1">Title</label>
                                <input class="form-control btn-square" id="input-text-1"
                                    type="text" placeholder="Isikan Title" name="title">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 draggable">
                                        <label for="select-1">Pilih Tipe Galeri</label>
                                        <select class="form-control btn-square" id="namesas"
                                            name="type">
                                            <option>Pilih Tipe</option>
                                            <option value="1">Video</option>
                                            <option value="2">Foto</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 draggable">
                                        <input class="form-control btn-square datasas"
                                            id="1" type="text" name="link"
                                            placeholder="Masukkan Link Video Url">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 draggable">
                                <label for="input-text-1">Deskripsi</label>
                                <Textarea class="form-control" name="deskripsi"></Textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<a href="youtube.com"></a>
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0">
                <h5>IMAGE GALLERY</h5>
            </div>
            <div class="card-body row">
                @foreach ($galeri as $item)
                    <div class="col-md-4">
                        <img style="max-height: 300px" class="img-thumbnail"
                            src="{{ asset('/storage/' . $item->image) }}" itemprop="thumbnail"
                            alt="Image description">
                        <div class="pt-2">
                            <a href="{{ route('admin.galeri.edit', $item->id) }}"
                                class="btn btn-primary btn-sm">Update</a>
                            <button class="btn btn-danger btn-sm" type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#tooltipmodal{{ $item->id }}">Delete</button>
                            <div class="modal fade" id="tooltipmodal{{ $item->id }}"
                                tabindex="-1" role="dialog" aria-labelledby="tooltipmodal"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Apakah Kamu Yakin Ingin Hapus
                                                {{ $item->title }}</h5>
                                            <button class="btn-close" type="button"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin.galeri.destroy', $item->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-primary"
                                                    type="submit">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <p>{{ Str::limit($item->title, 50, '...') }} ({{ $item->type }})
                            </p>
                        </div>
                    </div>
                @endforeach
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
