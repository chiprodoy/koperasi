@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Edit Soal Kecerdasan</h3>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-input" role="tabpanel"
                                aria-labelledby="pills-input-tab">
                                <form class="theme-form" method="POST" enctype="multipart/form-data"
                                    action="{{ route('admin.tips-and-tricks.update', $tipsAndTricks->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3 draggable">
                                        <label for="input-text-1">Tips & Tricks</label>
                                        <Textarea class="form-control" name="content">{{ old('content', $tipsAndTricks->content) ?? '' }}</Textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
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
