@extends('guest.welcome')

@section('title', 'Detail Berita')

@section('content')
<section class="py-5 bg-white" id="berita">
  <div class="container">
    <h2 class="text-center fw-bold text-success mb-5">{{$postCategory->name}}</h2>
    <div class="row g-4">
    </div>
  </div>
</section>

<section class="py-5 bg-white" id="kategori">
  <div class="container">
    <div class="row">
      <!-- Konten Utama -->
      <div class="col-lg-8 mx-auto">
        @foreach ($Content as $item)
                    <!-- Kartu berita 2 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                <img src="{{ $item->cover }}" class="img-fluid">
                <div class="p-3 bg-white">
                    <small class="text-muted d-block mb-1">
                    <i class="bi bi-calendar-event"></i> {{$item->created_at->format('d M Y H:i:s')}} &nbsp; | {{$item->writer}}
                    </small>
                    <h6 class="fw-semibold text-dark mb-0">
                    <a href="{{route('guest.post.detail',$item->slug)}}"> {{ $item->title }}</a>
                    </h6>
                </div>
                </div>
            </div>
        @endforeach


      </div>
    </div>
  </div>
</section>
@endsection
