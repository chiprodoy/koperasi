@extends('layouts.app')
@section('content')
    @push('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/viho') }}/assets/css/datatables.css">
    @endpush
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
                                <form class="theme-form" method="POST" action="{{ route('jenissyarat.store') }}">
                                    @csrf
                                    <div class="mb-3 draggable">
                                        <label for="input-text-1">Nama
                                            Jenis Pendidikan</label>
                                        <input class="form-control btn-square" id="input-text-1" type="text"
                                            placeholder="Isikan Pendidikan" required name="name">
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
                        <h5>Jenis Syarat Pakkepo</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>name</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jenissyarat as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}.</td>
                                            <td>{{ $item->name }}.</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#tooltipmodalUpdate{{ $item->id }}">Update</button>
                                                <div class="modal fade" id="tooltipmodalUpdate{{ $item->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="tooltipmodalUpdate"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Apakah Kamu
                                                                    Yakin Ingin Hapus
                                                                    {{ $item->title }}</h5>
                                                                <button class="btn-close" type="button"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('jenissyarat.update', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PATCH')
                                                                <div class="modal-body">
                                                                    <div class="mb-3 draggable">
                                                                        <label for="input-text-1">Nama
                                                                            Jenis Pendidikan</label>
                                                                        <input class="form-control btn-square"
                                                                            id="input-text-1" type="text"
                                                                            placeholder="Isikan Pendidikan" name="name"
                                                                            value="{{ old('name', $item->name) ?? '' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button class="btn btn-primary"
                                                                        type="submit">Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#tooltipmodal{{ $item->id }}">Delete</button>
                                                <div class="modal fade" id="tooltipmodal{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Apakah Kamu
                                                                    Yakin Ingin Hapus
                                                                    {{ $item->title }}</h5>
                                                                <button class="btn-close" type="button"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('jenissyarat.destroy', $item->id) }}"
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
    @push('scripts')
        <script src="{{ asset('theme/viho/') }}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('theme/viho/') }}/assets/js/datatable/datatables/datatable.custom.js"></script>
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
