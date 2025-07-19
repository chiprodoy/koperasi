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
          <img src="https://via.placeholder.com/800x400" class="img-fluid rounded-4 mb-4" alt="Gambar Berita">

          <!-- Metadata -->
          <div class="mb-3 text-muted small d-flex align-items-center gap-3">
            <span><i class="bi bi-calendar"></i> {{$Content->created_at }}</span>
            <span><i class="bi bi-person"></i> {{$Content->writer }}</span>
            <span><i class="bi bi-tag"></i> Kegiatan</span>
          </div>

          <!-- Judul -->
          <h2 class="fw-bold text-success mb-3">Koperasi Sawit Makmur Gelar Pelatihan Digitalisasi untuk Anggota</h2>

          <!-- Isi Konten -->
          <p class="text-muted">
            Dalam upaya meningkatkan efisiensi dan transparansi transaksi, Koperasi Sawit Makmur menyelenggarakan pelatihan digitalisasi bagi seluruh anggotanya. Kegiatan ini dilaksanakan pada 17 Juli 2025 di Balai Desa Sukamaju dan diikuti oleh lebih dari 150 petani sawit.
          </p>
          <p class="text-muted">
            Pelatihan mencakup pengenalan aplikasi kasir digital, sistem penjualan TBS secara daring, serta edukasi keamanan data koperasi. Ketua Koperasi, Bapak Ahmad Syahputra, menyampaikan bahwa “Digitalisasi adalah langkah penting untuk membawa koperasi ke era yang lebih maju dan akuntabel.”
          </p>
          <blockquote class="blockquote my-4 p-4 bg-light border-start border-4 border-success rounded">
            <p class="mb-0 fst-italic">“Koperasi kami ingin menjadi pelopor koperasi modern di Sumatera Selatan.”</p>
            <footer class="blockquote-footer mt-2">Ahmad Syahputra, Ketua Koperasi</footer>
          </blockquote>
          <p class="text-muted">
            Seluruh peserta mendapatkan akses ke aplikasi koperasi digital serta pendampingan teknis selama 3 bulan ke depan. Diharapkan, program ini dapat meningkatkan pendapatan anggota serta memperkuat tata kelola koperasi.
          </p>

          <!-- Tombol Kembali -->
          {{-- <a href="{{ route('berita.index') }}" class="btn btn-outline-success mt-4"><i class="bi bi-arrow-left"></i> Kembali ke Berita</a> --}}
        </article>
      </div>
    </div>
  </div>
</section>
@endsection
