<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $Title}}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    .hero {
      background: url('./img/Palm-Oil-Plantation-Pathway.png') center/cover no-repeat;
      height: 100vh;
      color: white;
      display: flex;
      align-items: center;
      text-shadow: 1px 1px 5px #000;
    }

    .marquee {
      background: #f39c12;
      color: white;
      padding: 8px;
      font-weight: bold;
    }

    .card:hover {
      transform: scale(1.02);
      transition: 0.3s ease-in-out;
    }

    footer {
      background: #212529;
      color: white;
    }
    /* Menu utama (nav-link) terlihat lebih besar dan seimbang */
    .navbar-nav > .nav-item > .nav-link {
        font-size: 16px;         /* naikkan dari default ~14px */
        font-weight: 600;        /* lebih tebal dari default */
        padding: 12px 18px;      /* beri ruang agar tidak terlihat sempit */
        transition: background-color 0.2s ease-in-out;
    }

    /* Ubah background hanya saat hover menu utama */
    .navbar-nav > .nav-item > .nav-link:hover {
    background-color: #a5c90f; /* hijau terang dari palet Anda */
    color: white;
    border-radius: 6px;
    transition: background-color 0.2s ease-in-out;
    }

      /* Tampilkan dropdown saat hover */
    .navbar-nav .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }

    /* Hilangkan delay dan efek fokus */
    .dropdown-toggle::after {
        display: none;
    }

    .navbar-nav .nav-item {
        margin-left: 16px; /* bisa disesuaikan */
    }

    /* Dropdown hover and background styling */
    .navbar .dropdown-menu {
        background-color: #e9f5e1; /* atau ganti sesuai selera */
        border: 1px solid #ddd;
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        border-radius: 6px;
        padding: 10px 0; /* beri ruang vertikal di dalam dropdown */
        min-width: 220px; /* pastikan lebar minimum agar tidak terlalu sempit */
    }

    .navbar .dropdown-item {
        color: #222;
        font-weight: 500;
        line-height: 1.5;   /* agar teks tidak terlalu rapat */
        padding: 12px 20px; /* ruang atas/bawah dan kiri/kanan diperbesar */
        transition: background-color 0.2s ease-in-out;
        border-radius: 4px;
    }

    .navbar .dropdown-item:hover {
        background-color: #a5c90f; /* warna oranye cerah dari palet untuk efek hover */
        color: white;
    }

    #produk .shadow:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }

    #tentang h2 {
        font-size: 2rem;
    }

    #tentang ul li::marker {
        color: #a5c90f;
    }

    .counter-box {
        transition: all 0.3s ease;
        background: #f9f9f9;
    }

    .counter-box:hover {
        transform: translateY(-5px);
        background-color: #fff;
    }

    .counter {
        color: #212529;
        font-size: 2rem;
    }

    #berita .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #berita .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    }

    #berita .card img {
        object-fit: cover;
        height: 220px;
        width: 100%;
    }

    #berita h6 {
        font-size: 1rem;
        line-height: 1.4;
    }

    #anggota img {
        object-fit: cover;
        border: 3px solid #e9f5e1;
    }

    #anggota .card {
        background-color: #ffffff;
        transition: all 0.3s ease;
    }

    #anggota .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    }

    @media (max-width: 768px) {
        #anggota .card {
        flex-direction: column;
        text-align: center;
        }
    }

  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
@include('guest.menu')

<main class="flex-grow-1">
    @yield('content')
</main>

  <!-- Footer -->
  <footer class="py-4 text-center">
    <div class="container">
      <p class="mb-0">© 2025 Koperasi Jaya Sempurna. All rights reserved.</p>
    </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000,  // Durasi animasi (ms)
        once: true       // Hanya animasi sekali (tidak setiap scroll)
    });
    </script>

    <script>
        const counters = document.querySelectorAll('.counter');
        const speed = 100;

        const animateCounters = () => {
            counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10);
                } else {
                counter.innerText = target.toLocaleString('id-ID');
                }
            };

            updateCount();
            });
        };

        let shown = false;
        window.addEventListener('scroll', () => {
            const section = document.getElementById('statistik');
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100 && !shown) {
            animateCounters();
            shown = true;
            }
        });
    </script>
</body>
</html>
