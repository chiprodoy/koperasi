@extends('layouts.app')
@section('content')

<div class="container py-4">
    <h3 class="mb-4">Daftar Anggota</h3>

    <form method="GET" class="row g-3 mb-4">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Cari nama/nomor anggota/nomor hp" value="{{ request('search') }}">
        </div>
        <div class="col-md-3">
            <select name="status" class="form-select">
                <option value="">-- Semua Status --</option>
                <option value="aktif" {{ request('status')=='aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ request('status')=='nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Filter</button>
        </div>
        <div class="col-md-3 text-end">
            <a href="{{ route('admin-anggota-koperasi.create') }}" class="btn btn-success">+ Tambah Anggota</a>
        </div>
    </form>

            @if (session('response.message'))
                        <div class="alert alert-warning">
                            {{ session('response.message') }}
                        </div>
            @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th></th>
                <th>No Anggota</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Status</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($dataAnggota as $a)
            <tr>

                <td><a class="btn btn-xs btn-success w-10" href='#' title="Simpanan peserta">Simpanan</a></td>
                <td>{{ $a->nomor_anggota }}</td>
                <td>{{ $a->nik }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->telepon }}</td>
                <td>{{ ($a->status_keanggotaan==\App\Models\Simkop\Anggota::STATUS_AKTIF) ? 'Aktif' : 'Tidak Aktif' }}</td>
                <td>
                    <a href="{{ route('admin-anggota-koperasi.edit', $a->uuid) }}" class="btn btn-xs btn-warning w-10">
                        Edit
                    </a>
                    <form action="{{ route('admin-anggota-koperasi.destroy', $a->uuid) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-xs btn-danger w-10">
                        Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="text-center">Tidak ada data.</td></tr>
        @endforelse
        </tbody>
    </table>

    {{ $dataAnggota->withQueryString()->links() }}
</div>
{{-- @push('js') --}}

{{-- <script type="text/javascript">
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

</script> --}}
{{-- @endpush --}}
@endsection
