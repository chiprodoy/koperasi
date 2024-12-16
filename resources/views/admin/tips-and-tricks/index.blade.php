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
                    <div class="card-header pb-0">
                        @if ($tipsAndTricks == null)
                            <a href="{{ route('admin.tips-and-tricks.create') }}" class="btn btn-primary mb-3">Tambah data</a>
                        @endif
                        <h5>Tip dan Trik Mengerjakan Soal</h5>
                    </div>
                    <div class="card-body row">
                        @if ($tipsAndTricks == null)
                            <p>Tidak ada soal</p>
                        @else
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tips & Tricks</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $tipsAndTricks->content }}</td>
                                        <td>
                                            <div class="pt-2">
                                                <a href="{{ route('admin.tips-and-tricks.edit', $tipsAndTricks->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
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
