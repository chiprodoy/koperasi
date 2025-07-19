@extends('guest.welcome')
@section('content')
<!-- Running Text Harga -->
  <div class="marquee">
    <marquee behavior="scroll" direction="left">Update Harga Sawit Hari Ini: Rp 2.950/kg | Harga TBS Meningkat 3% Dibanding Kemarin | Info lengkap hubungi admin koperasi</marquee>
  </div>

  <!-- Hero Section -->
  <section class="hero text-center" id="beranda">
    <div class="container">
      <h1 class="display-4 fw-bold">Koperasi Jaya Sempurna</h1>
      <p class="lead">Bersama Meningkatkan Kesejahteraan Petani Sawit</p>
      <a href="#anggota" class="btn btn-warning btn-lg mt-3">Daftar Anggota</a>
    </div>
  </section>

<!-- Layanan & Produk Kami -->
<section id="produk" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold text-success mb-5">Layanan & Produk Kami</h2>
    <div class="row text-center g-4">
      <!-- Card 1 -->
      <div class="col-md-4 " data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 bg-white shadow rounded-4 h-100">
          <div class="text-success mb-3" style="font-size: 3rem;">
            <i class="bi bi-box-seam"></i>
          </div>
          <h5 class="fw-bold mb-2">Penjualan TBS</h5>
          <p class="text-muted mb-0">Harga kompetitif langsung ke pabrik mitra, dengan transparansi dan efisiensi.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 bg-white shadow rounded-4 h-100">
          <div class="text-warning mb-3" style="font-size: 3rem;">
            <i class="bi bi-truck"></i>
          </div>
          <h5 class="fw-bold mb-2">Jasa Angkut</h5>
          <p class="text-muted mb-0">Transportasi aman, cepat, dan hemat biaya untuk hasil panen anggota.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 bg-white shadow rounded-4 h-100">
          <div class="text-primary mb-3" style="font-size: 3rem;">
            <i class="bi bi-flower3"></i>
          </div>
          <h5 class="fw-bold mb-2">Pupuk & Bibit</h5>
          <p class="text-muted mb-0">Penyediaan bibit unggul dan pupuk berkualitas tinggi untuk petani anggota.</p>
        </div>
      </div>
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
        <p class="mb-4 text-muted">
          Koperasi Sawit Sejahtera berdiri sejak 2010 dan berfokus pada peningkatan pendapatan dan kesejahteraan petani sawit di Sumatera Selatan.
        </p>
        <div class="mb-3">
          <h5 class="text-dark fw-semibold"><i class="bi bi-card-list"></i> Visi</h5>
          <p class="text-muted mb-2">Menjadi koperasi sawit yang modern dan berdaya saing global.</p>
        </div>
        <div>
          <h5 class="text-dark fw-semibold"><i class="bi bi-card-list"></i> Misi</h5>
          <ul class="text-muted ps-3">
            <li>Meningkatkan pendapatan petani</li>
            <li>Menyediakan sarana dan pelatihan pertanian</li>
            <li>Mewujudkan koperasi digital yang transparan</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section Counter -->
<section class="py-5 bg-light" id="statistik">
  <div class="container">
    <h2 class="text-center fw-bold text-success mb-5">Statistik Koperasi</h2>
    <div class="row text-center g-4">
      <div class="col-md-4">
        <div class="counter-box p-4 shadow rounded-4">
          <div class="icon mb-3 text-success" style="font-size: 2.5rem;"><i class="bi bi-people-fill"></i></div>
          <h3 class="fw-bold"><span class="counter" data-target="1280">0</span>+</h3>
          <p class="text-muted">Anggota Terdaftar</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="counter-box p-4 shadow rounded-4">
          <div class="icon mb-3 text-warning" style="font-size: 2.5rem;"><i class="bi bi-graph-up-arrow"></i></div>
          <h3 class="fw-bold"><span class="counter" data-target="950000000">0</span></h3>
          <p class="text-muted">Total Aset (Rp)</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="counter-box p-4 shadow rounded-4">
          <div class="icon mb-3 text-primary" style="font-size: 2.5rem;"><i class="bi bi-cast"></i></div>
          <h3 class="fw-bold"><span class="counter" data-target="67">0</span>+</h3>
          <p class="text-muted">Mitra & Partner</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimoni Anggota (2 Kolom x 2 Testimoni) -->
<section class="py-5 bg-light" id="anggota">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold text-success">Testimoni Anggota</h2>
    <div class="row g-4">

      <!-- Kolom 1 -->
      <div class="col-md-6 d-flex flex-column gap-4">

        <!-- Testimoni 1 -->
        <div class="card shadow-sm border-0 rounded-4 p-3 d-flex flex-row align-items-center gap-3">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle" width="80" height="80" alt="Ahmad Syahputra">
          <div>
            <h6 class="mb-1 fw-semibold">Ahmad Syahputra</h6>
            <small class="text-muted">Petani Desa Sukamakmur</small>
            <p class="mt-2 text-muted fst-italic">“Dengan bergabung ke koperasi, hasil panen saya lebih mudah dijual dan pendapatan meningkat.”</p>
          </div>
        </div>

        <!-- Testimoni 2 -->
        <div class="card shadow-sm border-0 rounded-4 p-3 d-flex flex-row align-items-center gap-3">
          <img src="https://randomuser.me/api/portraits/women/65.jpg" class="rounded-circle" width="80" height="80" alt="Siti Aminah">
          <div>
            <h6 class="mb-1 fw-semibold">Siti Aminah</h6>
            <small class="text-muted">Kontributor Pemasaran Kolektif</small>
            <p class="mt-2 text-muted fst-italic">“Koperasi memberi pelatihan dan akses pasar yang luas. Saya merasa lebih percaya diri.”</p>
          </div>
        </div>

      </div>

      <!-- Kolom 2 -->
      <div class="col-md-6 d-flex flex-column gap-4">

        <!-- Testimoni 3 -->
        <div class="card shadow-sm border-0 rounded-4 p-3 d-flex flex-row align-items-center gap-3">
          <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle" width="80" height="80" alt="Budi Hartono">
          <div>
            <h6 class="mb-1 fw-semibold">Budi Hartono</h6>
            <small class="text-muted">Pelatih Koperasi Muda</small>
            <p class="mt-2 text-muted fst-italic">“Saya bangga bisa berbagi ilmu dan bertumbuh bersama koperasi. Kami adalah keluarga.”</p>
          </div>
        </div>

        <!-- Testimoni 4 -->
        <div class="card shadow-sm border-0 rounded-4 p-3 d-flex flex-row align-items-center gap-3">
          <img src="https://randomuser.me/api/portraits/women/33.jpg" class="rounded-circle" width="80" height="80" alt="Nia Karina">
          <div>
            <h6 class="mb-1 fw-semibold">Nia Karina</h6>
            <small class="text-muted">Petani Muda Mandiri</small>
            <p class="mt-2 text-muted fst-italic">“Dengan koperasi, saya bisa mengelola hasil kebun lebih profesional dan transparan.”</p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>



<!-- Section Berita -->
<section class="py-5 bg-white" id="berita">
  <div class="container">
    <h2 class="text-center fw-bold text-success mb-5">Berita Terbaru</h2>
    <div class="row g-4">

      <!-- Kartu berita 1 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
          <img src="https://source.unsplash.com/600x400/?seminar,cooperative" class="img-fluid" alt="Berita 1">
          <div class="p-3 bg-white">
            <small class="text-muted d-block mb-1">
              <i class="bi bi-calendar-event"></i> 24 Juni 2025 &nbsp; | &nbsp; Koperasi Sawit
            </small>
            <h6 class="fw-semibold text-dark mb-0">
              Ketua Koperasi Jadi Narasumber Temu Bisnis UMKM Kota Palembang
            </h6>
          </div>
        </div>
      </div>

      <!-- Kartu berita 2 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
          <img src="https://source.unsplash.com/600x400/?meeting,community" class="img-fluid" alt="Berita 2">
          <div class="p-3 bg-white">
            <small class="text-muted d-block mb-1">
              <i class="bi bi-calendar-event"></i> 6 Mei 2025 &nbsp; | &nbsp; Koperasi Sawit
            </small>
            <h6 class="fw-semibold text-dark mb-0">
              Rapat Anggota Tahunan Buku 2024: “Adaptif, Produktif, Progresif”
            </h6>
          </div>
        </div>
      </div>

      <!-- Kartu berita 3 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
          <img src="https://source.unsplash.com/600x400/?gathering,people" class="img-fluid" alt="Berita 3">
          <div class="p-3 bg-white">
            <small class="text-muted d-block mb-1">
              <i class="bi bi-calendar-event"></i> 14 Feb 2025 &nbsp; | &nbsp; Koperasi Sawit
            </small>
            <h6 class="fw-semibold text-dark mb-0">
              Gathering Anggota Paguyuban Mitra Sawit Regional Timur
            </h6>
          </div>
        </div>
      </div>

      <!-- Tambah berita lainnya di sini -->

    </div>
  </div>
</section>


<!-- Kemitraan -->
<section id="kemitraan" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-3">Ingin Menjadi Mitra Kami?</h2>
    <p>Bergabunglah sebagai petani, pengangkut, atau investor.</p>
    <a href="#" class="btn btn-success">Daftar Kemitraan</a>
  </div>
</section>

<!-- Kontak -->
<section id="kontak" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Kontak Kami</h2>
    <div class="row">
      <div class="col-md-6">
        <p><strong>Alamat:</strong> Jl. Perkebunan No. 123, Sumatera Selatan</p>
        <p><strong>Telepon:</strong> 0821-xxxx-xxxx</p>
        <p><strong>Email:</strong> info@sawitmakmur.id</p>
      </div>
      <div class="col-md-6">
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nama Anda">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email">
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="4" placeholder="Pesan"></textarea>
          </div>
          <button class="btn btn-success">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
