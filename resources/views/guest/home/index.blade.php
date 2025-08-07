@extends('guest.welcome')
@section('content')
<!-- Running Text Harga -->
  <div class="marquee">
    <marquee behavior="scroll" direction="left">
        @foreach ($hargaKomoditas as $hargaSawit)
        @php $nextIndex = ($loop->index -  1 < 0) ? 0 : $loop->index - 1; @endphp

         @if ($loop->index == 0 || $hargaSawit->tgl_update_harga !=$hargaKomoditas[$nextIndex]->tgl_update_harga)
            Update Harga Sawit Per {{ $hargaSawit->tgl_update_harga->format('d M Y') }}
        @endif

        @if ($loop->index == 0 || $hargaSawit->sumber != $hargaKomoditas[$nextIndex]->sumber)
            # {{$hargaSawit->sumber}} :
        @endif

         {{$hargaSawit->komoditas->nama_komoditas}} {{$hargaSawit->keterangan}} Rp.{{$hargaSawit->harga}}
         @if (!$loop->last)  , @endif
        @endforeach
        </marquee>
  </div>

  <!-- Hero Section -->
  <section class="hero text-center" id="beranda">
    <div class="container">
      <h1 class="display-4 fw-bold">{{ env('APP_TITLE') }}</h1>
      <p class="lead">Bersama Meningkatkan Kesejahteraan Petani Sawit</p>
      <a  href="{{route('post.show','pendaftaran')}}" class="btn btn-warning btn-lg mt-3">Daftar Anggota</a>
    </div>
  </section>

<!-- Layanan & Produk Kami -->
<section id="produk" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold text-success mb-5">Layanan & Unit Usaha</h2>
    <div class="row text-center g-4">
       @foreach ($unitUsaha as $item)
        <!-- Card unit usaha  -->
        <div class="col-md-4 " data-aos="fade-up" data-aos-delay="100">
            <div class="p-4 bg-white shadow rounded-4 h-100">
                {!! $item->description !!}
            </div>
        </div>
       @endforeach
    </div>
  </div>
</section>


<!-- Tentang -->
<section id="tentang" class="py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <img src="./img/bg-tentang.png"
             alt="Tentang Koperasi"
             class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-lg-6">
        <h2 class="fw-bold mb-3 text-success">Tentang Koperasi</h2>
        {!! $visiMisi->description !!}
      </div>
    </div>
  </div>
</section>

<!-- Section Counter -->
<section class="py-5 bg-light" id="statistik">
  <div class="container">
    <h2 class="text-center fw-bold text-success mb-5">Statistik Koperasi</h2>
    <div class="row text-center g-4">
        @foreach ($statistikKoperasi as $statistik)
            <div class="col-md-4">
                <div class="counter-box p-4 shadow rounded-4">
                <div class="icon mb-3 text-success" style="font-size: 2.5rem;"><i class="{{$statistik->icon}}"></i></div>
                <h3 class="fw-bold"><span class="counter" data-target="{{$statistik->jumlah}}">0</span></h3>
                <p class="text-muted">{{$statistik->label}}</p>
                </div>
            </div>
        @endforeach

  </div>
</section>

<!-- Testimoni Anggota (2 Kolom x 2 Testimoni) -->
<section class="py-5 bg-light" id="anggota">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold text-success">Testimoni Anggota</h2>
    <div class="row g-4">
        @foreach ($testimoni as $item)
            <!-- Kolom 1 -->
            <div class="col-md-6 d-flex flex-column gap-4">
                <!-- Testimoni 1 -->
                <div class="card shadow-sm border-0 rounded-4 p-3 d-flex flex-row align-items-center gap-3">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle" width="80" height="80" alt="{{$item->nama}}">
                <div>
                    <h6 class="mb-1 fw-semibold">{{$item->nama}}</h6>
                    <small class="text-muted">{{ $item->pekerjaan }}</small>
                    <p class="mt-2 text-muted fst-italic">{{ $item->isi_testimoni}}</p>
                </div>
                </div>
            </div>

        @endforeach


    </div>
  </div>
</section>



<!-- Section Berita -->
<section class="py-5 bg-white" id="berita">
  <div class="container">
    <h2 class="text-center fw-bold text-success mb-5">Berita Terbaru</h2>
    <div class="row g-4">
    @foreach ($contentBerita as $item)
       <!-- Kartu berita 1 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
          <img src="https://source.unsplash.com/600x400/?seminar,cooperative" class="img-fluid" alt="Berita 1">
          <div class="p-3 bg-white">
            <small class="text-muted d-block mb-1">
              <i class="bi bi-calendar-event"></i> {{$item->created_at}} &nbsp; | &nbsp;
              @foreach ($item->categories as $kategori)
                  {{$kategori->name}}
              @endforeach
            </small>
            <h6 class="fw-semibold text-dark mb-0">
              <a href="{{route('guest.post.detail',$item->uuid)}}"> {{$item->title}}</a>
            </h6>
          </div>
        </div>
      </div>
    @endforeach

      <!-- Tambah berita lainnya di sini -->

    </div>
  </div>
</section>


<!-- Kemitraan -->
<section id="kemitraan" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-3">Ingin Menjadi Mitra Kami?</h2>
    <p>Bergabunglah sebagai petani, pengangkut, atau investor.</p>
    <a href="{{route('guest.post.detail','kemitraan')}}" class="btn btn-success">Daftar Kemitraan</a>
  </div>
</section>

<!-- Kontak -->
<section id="kontak" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Kontak Kami</h2>
    <div class="row">
      <div class="col-md-6">
       {!! $kontakKami->description !!}
      </div>
      <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496.500958480832!2d104.0971939697468!3d-3.321592008822128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a4824b8adb01b%3A0xef883adb1532d83e!2sTanah%20Abang%2C%20Penukal%20Abab%20Lematang%20Ilir%20Regency%2C%20South%20Sumatra!5e1!3m2!1sen!2sid!4v1753272141444!5m2!1sen!2sid" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>
@endsection
