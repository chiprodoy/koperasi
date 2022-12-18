@extends('layouts.app')
@section('content')
<div class="card">
    <form method="POST" action="{{ route($updateURL,$RECORD->uuid)}}">
        @csrf
        @method('PUT')
        <div class="card-header">
            <div class="row">
                <div class="col-auto me-auto">
                    <h5>{{ $CURRENT_PAGE->title }}</h5>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-sm btn-danger" id="btnDestroy">Hapus</a>
                    <a href='#' class="btn btn-sm btn-warning" id="btnEdit">Edit</a>
                    <button class="btn btn-sm btn-warning" type="button" id="btnSaveUpdate">Simpan Perubahan</button>

                </div>
            </div>
        </div>
        <div class="card-body">
            <x-viho::alert id="alert_notif" class="alert-info" style="display: none;"></x-viho::alert>
            <x-viho::form.magic :model="$modelRecords" :extData="$RECORD"/>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-auto me-auto">
                    <a href="{{ route('dashboard')}}" class="btn btn-sm btn-secondary">Kembali</a>
                </div>

            </div>
        </div>
    </form>
</div>
@push('js')

<script type="text/javascript">
$(document).ready(function(){
    $('#btnSaveUpdate').hide();
    $('input').attr('disabled','disabled');
    /*
        EDIT
    */
    $('#btnEdit').click(function(){
        $('#btnEdit').hide();
        $('#btnSaveUpdate').show();
        $('input').removeAttr('disabled');
        $('#kode_profesi').attr('disabled','disabled');

    });
    /*

        Save Update
    */
    $('#btnSaveUpdate').click(function(){
        var isConfirm=confirm('anda yakin menyimpan perubahan?');
        $( "#alert_notif" ).hide();

        if(isConfirm){
            var form = $(this).parents('form:first');
            var action = $(this).parents('form:first').attr('action');
            $("input[name='_method']",form).val('PUT');
                $.post(action, $(this).parents('form:first').serialize(),function( data ) {
                    $( "#alert_notif" ).removeClass();
                    $( "#alert_notif" ).addClass('alert alert-info alert-dismissible fade show');
                    $( "#alert_notif" ).show();
                    $( "#alert_notif" ).html( data.message );
                    $('#alert_notif').append("<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>");
                });
        }

    });

    /*
        DELETE
    */
    $('#btnDestroy').click(function(){
        var isConfirm=confirm('anda yakin menghapus');
        if(isConfirm){
            $('input').removeAttr('disabled');

            var form = $(this).parents('form:first');
            var action = $(this).parents('form:first').attr('action');
            $("input[name='_method']",form).val('DELETE');
                $.post(action, $(this).parents('form:first').serialize(),function( data ) {
                    document.location.href='{{route('dashboard')}}';
                });
        }
    });

});


</script>
@endpush

@endsection
