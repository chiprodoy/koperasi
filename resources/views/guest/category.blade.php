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
        @if($Content->count() > 0)
            <div class="row">
                    @foreach($Content as $item)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm p-4">
                                @if($item->cover)
                                    <img src="{{ $item->cover }}" style="height:200px" class="card-img-top" alt="{{ $item->title }}">
                                @else
                                    <img src="https://via.placeholder.com/600x400?text=No+Image" class="card-img-top" alt="{{ $item->title }}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a class="link-underline link-underline-opacity-0" href='{{route('guest.post.detail', $item->slug)}}'>{{ $item->title }}</a>
                                    </h5>
                                    <span><i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d M Y') }}</span>
                                    <span><i class="bi bi-person"></i> {{$item->writer }}</span>
                                    <p class="card-text">
                                        {{ Str::limit(strip_tags($item->description), 120, '...') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-4">
                    {{ $Content->links() }}
                </div>
            @else
                <p class="text-muted">Belum ada berita pada kategori ini.</p>
            </div>
        @endif
    </div>
</section>
@endsection
