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
                                                action="{{ route('media.store') }}">
                                                @csrf
                                                <div class="mb-3 draggable">
                                                    <label for="input-file-1">Image</label>
                                                    <input id="input-file-1" name="image" type="file">
                                                </div>
                                                <div class="mb-3 draggable">
                                                    <label for="input-text-1">Title</label>
                                                    <input class="form-control btn-square" id="input-text-1"
                                                        type="text" placeholder="Isikan Title" name="title">
                                                </div>
                                                <div class="mb-3 draggable">
                                                    <label for="input-text-1">link</label>
                                                    <Textarea class="form-control" name="link"></Textarea>
                                                </div>
                                                <div class="mb-3 draggable">
                                                    <label for="input-text-1">Color</label>
                                                    <Textarea class="form-control" name="color"></Textarea>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5>Media Pakkepo</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="basic-1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>link</th>
                                                    <th>Color</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($media as $index => $item)
                                                    <tr>
                                                        <td>{{ $index + 1 }}.</td>
                                                        <td>
                                                            <img style="width: 50px; height:50px; background-color:#{{ $item->color }}; padding:10px; border-radius: 10px;"
                                                                src="{{ '/storage/' . $item->image }}"
                                                                class="img-fluid" alt="">
                                                        </td>
                                                        <td>{{ $item->title }}</td>
                                                        <td><a target="_blank"
                                                                href="{{ $item->link }}">{{ $item->link }}</a>
                                                        </td>
                                                        <td>
                                                            <div class="row d-flex">
                                                                <div>
                                                                    Color : {{ $item->color }}
                                                                </div>
                                                                <div>
                                                                    <input type="color"
                                                                        value="#{{ $item->color }}" disabled>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#tooltipmodalUpdate{{ $item->id }}">Update</button>
                                                            <div class="modal fade"
                                                                id="tooltipmodalUpdate{{ $item->id }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="tooltipmodalUpdate"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-xl modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Apakah Kamu
                                                                                Yakin Ingin Hapus
                                                                                {{ $item->title }}</h5>
                                                                            <button class="btn-close" type="button"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form
                                                                            action="{{ route('media.update', $item->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <div class="modal-body">
                                                                                <div class="mb-3 draggable">
                                                                                    <label
                                                                                        for="input-file-1">Image</label>
                                                                                    <input id="input-file-1"
                                                                                        name="image" type="file">
                                                                                </div>
                                                                                <div class="mb-3 draggable">
                                                                                    <label
                                                                                        for="input-text-1">Title</label>
                                                                                    <input
                                                                                        class="form-control btn-square"
                                                                                        id="input-text-1"
                                                                                        type="text"
                                                                                        placeholder="Isikan Title"
                                                                                        name="title"
                                                                                        value="{{ old('title', $item->title) ?? '' }}">
                                                                                </div>
                                                                                <div class="mb-3 draggable">
                                                                                    <label
                                                                                        for="input-text-1">link</label>
                                                                                    <input
                                                                                        class="form-control btn-square"
                                                                                        id="input-text-1"
                                                                                        type="text"
                                                                                        placeholder="Isikan Link"
                                                                                        name="link"
                                                                                        value="{{ old('link', $item->link) ?? '' }}">
                                                                                </div>
                                                                                <div class="mb-3 draggable">
                                                                                    <label
                                                                                        for="input-text-1">Color</label>
                                                                                    <input
                                                                                        class="form-control btn-square"
                                                                                        id="input-text-1"
                                                                                        type="text"
                                                                                        placeholder="Isikan Color"
                                                                                        name="color"
                                                                                        value="{{ old('color', $item->color) ?? '' }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-secondary"
                                                                                    type="button"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button class="btn btn-primary"
                                                                                    type="submit">Update</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-danger btn-sm" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#tooltipmodal{{ $item->id }}">Delete</button>
                                                            <div class="modal fade"
                                                                id="tooltipmodal{{ $item->id }}" tabindex="-1"
                                                                role="dialog" aria-labelledby="tooltipmodal"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Apakah Kamu
                                                                                Yakin Ingin Hapus
                                                                                {{ $item->title }}</h5>
                                                                            <button class="btn-close" type="button"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form
                                                                            action="{{ route('media.destroy', $item->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-secondary"
                                                                                    type="button"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button class="btn btn-primary"
                                                                                    type="submit">Hapus</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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

