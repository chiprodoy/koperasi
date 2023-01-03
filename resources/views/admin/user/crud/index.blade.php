@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>{{$titleOfIndexPage}}
        @can('create',\App\Models\User::class)
        <span>
            @if (strpos($createURL,'http')===0)
                <a class="btn btn-sm btn-outline-secondary" href="{{ $createURL }}">
                    <i class="bi bi-file-earmark-plus-fill"></i> Tambah
                </a>
            @else
                <a class="btn btn-sm btn-outline-secondary" href="{{ route($createURL) }}">
                    <i class="bi bi-file-earmark-plus-fill"></i> Tambah
                </a>
            @endif
        </span>
        @endcan

    </h2>
</div>
<div class="card">
    @csrf
      <x-viho::data-table :model="$modelRecords" :extData="$extData" :editButton="$editURL" :deleteButton="$deleteURL" :setRecord="false"/>
</div>
{{-- @push('js') --}}

<script type="text/javascript">
    /*
    DELETE
    */
    function destroy(action,id=''){
        var isConfirm=confirm('anda yakin menghapus');
        var csrfToken=$("input[name='_token']").val();
        if(isConfirm){

            $.post(action, {'_method':'delete','_token':csrfToken},function( data ) {
                @if (strpos($indexURL,'http')===0)
                    document.location.href='{{ $indexURL }}';
                @else
                    document.location.href='{{route($indexURL)}}';
                @endif

            },'json');
        }
    }

</script>
{{-- @endpush --}}
@endsection
