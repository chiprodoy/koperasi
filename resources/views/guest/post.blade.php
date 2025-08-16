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
            <span><i class="bi bi-eye"></i> {{$postViewer }} view </span>
          </div>

          <!-- Judul -->
          <h2 class="fw-bold text-success mb-3">{{$Content->title}}</h2>

          <!-- Isi Konten -->
          {!! $Content->description !!}
          <!-- Tombol Kembali -->
          {{-- <a href="{{ route('berita.index') }}" class="btn btn-outline-success mt-4"><i class="bi bi-arrow-left"></i> Kembali ke Berita</a> --}}
        </article>
        <div class="d-flex gap-2 mt-4">
    {{-- Tombol Like --}}
    <button id="like-btn" class="btn btn-sm btn-outline-primary" onclick="likePost()">
        <i class="bi bi-hand-thumbs-up-fill"></i> Like (<span id="like-count">{{ $postLiked ?? 0 }}</span>)
    </button>

    {{-- Tombol Share --}}
    <div class="dropdown">
        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
            <i class="bi bi-share-fill"></i> Share (<span id="share-count">{{ $postShared ?? 0 }}</span>)
        </button>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="#" onclick="sharePost('facebook')">
                   Facebook
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="#" onclick="sharePost('twitter')">
                   Twitter / X
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="#" onclick="sharePost('whatsapp')">
                   WhatsApp
                </a>
            </li>
            <li>
                <button class="dropdown-item" onclick="sharePost('copy')">📋 Copy Link</button>
            </li>
        </ul>
    </div>
</div>

      </div>
    </div>

  </div>
</section>
    @push('scripts')
    <script>
        function sharePost(type) {
            let url = "{{ url()->current() }}";

            // Buka share link sesuai type
            if (type === 'facebook') {
                window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank');
            } else if (type === 'twitter') {
                window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}`, '_blank');
            } else if (type === 'whatsapp') {
                window.open(`https://wa.me/?text=${encodeURIComponent(url)}`, '_blank');
            } else if (type === 'copy') {
                navigator.clipboard.writeText(url).then(() => alert("Link copied!"));
            }

            // Catat share di database via AJAX
            fetch("{{ route('guest.posts.share', $Content->id) }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('share-count').textContent = data.count;
                }
            })
            .catch(err => console.error(err));
        }
        /**
         *
         *
        */
        function likePost() {
            let url = "{{ url()->current() }}";

            // Catat share di database via AJAX
            fetch("{{ route('guest.posts.like', $Content->id) }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('like-count').textContent = data.count;
                }
            })
            .catch(err => console.error(err));
        }
        </script>

    @endpush
@endsection
