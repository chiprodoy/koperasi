@extends('guest.welcome')

@section('title', 'Detail Berita')

@section('content')
<section class="py-5 bg-white" id="berita-detail">
  <div class="container">
    <div class="row">
      <!-- Konten Utama -->
      <div class="col-lg-8 mx-auto">
        <article>
          <!-- Gambar Utama -->
          <img src="{{url('cover')}}" class="img-fluid rounded-4 mb-4" alt="Cover">

          <!-- Metadata -->
          <div class="mb-3 text-muted small d-flex align-items-center gap-3">
            <span><i class="bi bi-calendar"></i> {{$Content->created_at }}</span>
            <span><i class="bi bi-person"></i> {{$Content->writer }}</span>
            <span><i class="bi bi-tag"></i>
                @foreach ($Content->categories as $category)
                    {{$category->name}},
                    @foreach ($category->parentCategory() as $parentCategory)
                        {{$parentCategory->name}},
                    @endforeach
                @endforeach

            </span>
          </div>

          <!-- Judul -->
          <h2 class="fw-bold text-success mb-3">{{$Content->title}}</h2>

          <!-- Isi Konten -->
          {!! $Content->description !!}
          <!-- Tombol Kembali -->
          {{-- <a href="{{ route('berita.index') }}" class="btn btn-outline-success mt-4"><i class="bi bi-arrow-left"></i> Kembali ke Berita</a> --}}
        </article>
      </div>
    </div>
  </div>
</section>
@endsection
