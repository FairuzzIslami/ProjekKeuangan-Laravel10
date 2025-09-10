
<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dompetku - Kelola Keuanganmu dengan Mudah</title>
  <link rel="icon" type="image/x-icon" href="{{asset('asset/img/logo.png')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>

  * {
    box-sizing: border-box;
  }

  html,
  body {
    max-width: 100%;
    overflow-x: hidden;
  }



  /* navigation */
  .glass-navbar {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    transition: all 0.3s ease-in-out;
  }

  .glass-navbar.scrolled {
    background: rgba(255, 255, 255, 0.7);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  .glass-navbar .nav-link,
  .glass-navbar .navbar-brand {
    color: #000000 !important;
    transition: color 0.3s ease-in-out;
  }

  .navbar-toggler {
    border: none;
  }

  /* jaminan Keuangan */
  .feature-card {
    border-radius: 20px;
    padding: 30px;
    transition: all 0.3s ease;
    text-align: center;
  }

  .feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  }

  .feature-icon {
    font-size: 2.5rem;
    color: #f4c430;
    margin-bottom: 15px;
  }

  .section-title {
    color: #f4c430;
    font-weight: 700;
  }

  /* Produk dan layanan  */
  #layanan .card {
    min-height: 420px;
  }

  .custom-list li {
    position: relative;
    padding-left: 18px;
    margin-bottom: 8px;
  }

  .custom-list li::before {
    content: "•";
    position: absolute;
    left: 0;
    color: #f0ad4e;
    font-weight: bold;
  }

  #layanan .card {
    min-height: 430px;
  }

  #layanan .card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
  }

  /* Hover effect */
  .hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: -8px 0 20px -6px rgba(0, 0, 0, 0.15),
      8px 0 20px -6px rgba(0, 0, 0, 0.15);
  }

  .hover-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  }

  /* Ribbon Unggulan */
  .ribbon {
    position: absolute;
    top: 12px;
    left: 50%;
    transform: translateX(-50%);
    padding: 4px 16px;
    font-size: 0.85rem;
    border-radius: 30px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  }

  /* wa float */
  .whatsapp-float {
    position: fixed;
    width: 55px;
    height: 55px;
    bottom: 20px;
    right: 20px;
    background-color: #25D366;
    color: white;
    border-radius: 50%;
    text-align: center;
    font-size: 28px;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    transition: all 0.3s ease-in-out;
  }

  .whatsapp-float:hover {
    background-color: #1ebe5c;
    color: #fff;
    transform: scale(1.1);
  }

  .btn-warning {
    background-color: #ffc107;
    border: none;
    transition: all 0.3s ease-in-out;
  }

  .btn-warning:hover {
    background-color: #e0a800;
    /* lebih gelap */
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  }

  .btn-dark {
    background: linear-gradient(145deg, #000, #222);
    border: none;
    color: #fff;
  }

  .btn-dark:hover {
    background: linear-gradient(145deg, #111, #333);
    color: #ffc107 !important;
  }
</style>
</head>

<body>

  <!-- Navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg fixed-top py-1 glass-navbar">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand fw-bold text-white" href="#">
        <img src="{{asset('asset/img/logo.png')}}" alt="DompetKu" style="height: 50px; width: auto;">
        <span class="fs-5">Dompet-Ku</span>
      </a>

      <!-- Toggle button (mobile) -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars fs-3"></i>
      </button>


      <!-- Menu -->
      <div class="collapse navbar-collapse justify-content-end mt-3 mt-lg-0" id="navbarNav">
        <ul class="navbar-nav me-3 text-center">
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="#tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="#cta">Kontak</a>
          </li>
          <li class="nav-item">
            <a href="login.html" class="btn btn-warning px-4 fw-semibold text-white">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero d-flex align-items-center py-5" style="min-height: 100vh; background-color: #f8f9fa;">
    <div class="container">
      <div class="row align-items-center">

        <!-- Left Content -->
        <div class="col-lg-6 text-center text-lg-start" data-aos="fade-up-right" data-aos-duration="1000">
          <h1 class="fw-bold display-5">
            Solusi <span class="text-warning">terbaik</span> untuk kebutuhan
            <span class="text-warning">keuangan digital</span> Anda
          </h1>

          <p class="mt-3 text-muted">
            Kami hadir dengan solusi keuangan digital terbaik untuk mendukung kebutuhan finansial Anda. Transaksi aman,
            pengelolaan mudah, dan akses yang responsif kapan saja.
          </p>
          <a href="#mulai" class="btn btn-warning px-4 py-2 mt-3 fw-semibold rounded-pill shadow">Mulai</a>
        </div>

        <!-- Right Image -->
        <div class="col-lg-6 text-center mt-4 mt-lg-0" data-aos="fade-up-left" data-aos-duration="1000">
          <img src="{{asset('asset/img/Finance-cuate.png')}}" alt="Digital Solution" class="img-fluid">
        </div>

      </div>
    </div>
  </section>

  <!-- Section Jaminan -->
  <section class="py-5 my-5">
    <div class="container text-center" data-aos="fade-up" data-aos-duration="1000">
      <h2 class="section-title">JAMINAN KEUANGAN KAMI</h2>
      <p class="text-muted mb-5">Keamanan, kecepatan, dan transparansi transaksi Anda adalah prioritas kami.</p>

      <div class="row g-4">
        <!-- Transaksi Cepat -->
        <div class="col-md-6 col-lg-3">
          <div class="card feature-card shadow-sm h-100">
            <div class="feature-icon">
              <i class="fas fa-bolt"></i>
            </div>
            <h5 class="fw-bold">TRANSAKSI CEPAT</h5>
            <p class="text-muted">Proses transaksi instan tanpa hambatan, kapanpun dan di manapun Anda berada.</p>
          </div>
        </div>

        <!-- Penyimpanan Aman -->
        <div class="col-md-6 col-lg-3">
          <div class="card feature-card shadow-sm h-100">
            <div class="feature-icon">
              <i class="fas fa-lock"></i>
            </div>
            <h5 class="fw-bold">KEAMANAN TINGGI</h5>
            <p class="text-muted">Data finansial Anda dilindungi dengan enkripsi dan sistem keamanan berlapis.</p>
          </div>
        </div>

        <!-- Transparansi -->
        <div class="col-md-6 col-lg-3">
          <div class="card feature-card shadow-sm h-100">
            <div class="feature-icon">
              <i class="fas fa-eye"></i>
            </div>
            <h5 class="fw-bold">TRANSPARANSI</h5>
            <p class="text-muted">Seluruh transaksi tercatat secara jelas dan transparan, mudah dipantau oleh pengguna.
            </p>
          </div>
        </div>

        <!-- Dukungan 24/7 -->
        <div class="col-md-6 col-lg-3">
          <div class="card feature-card shadow-sm h-100">
            <div class="feature-icon">
              <i class="fas fa-headset"></i>
            </div>
            <h5 class="fw-bold">DUKUNGAN 24/7</h5>
            <p class="text-muted">Tim support kami siap membantu Anda kapanpun untuk memastikan pengalaman terbaik.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Produk & Layanan -->
  <section class="py-5" id="layanan" style="margin-top: 35px; margin-bottom: 35px;">
    <div class="container text-center">
      <h2 class="section-title fw-bold mb-3">
        PRODUK & LAYANAN
      </h2>
      <div class="underline bg-warning mx-auto mb-4" style="width:80px; height:4px; border-radius:2px;"></div>
      <p class="text-muted mb-5">
        Pilih paket terbaik sesuai kebutuhan Anda, dengan layanan keuangan digital yang lengkap dan mudah digunakan.
      </p>

      <div class="row g-4" data-aos="zoom-in" data-aos-duration="1500">
        <!-- Paket Mingguan -->
        <div class="col-md-4">
          <div class="card feature-card shadow-sides border-0 h-100 rounded-4 hover-card" data-aos="zoom-in">
            <div class="card-body d-flex flex-column">
              <h4 class="fw-bold text-warning">Paket Mingguan</h4>
              <ul class="list-unstyled text-muted mt-3 flex-grow-1 custom-list text-start">
                <li>Catatan Pengeluaran Harian</li>
                <li>Rekap Mingguan</li>
                <li>Laporan Grafik</li>
                <li>Export Excel / PDF</li>
              </ul>
              <a href="https://wa.me/6281234567890?text=Halo, saya ingin pesan Paket Mingguan."
                class="btn btn-warning w-100 rounded-pill fw-semibold text-dark mt-auto shadow-sm">Pesan</a>
            </div>
          </div>
        </div>

        <!-- Paket Bulanan (Unggulan) -->
        <div class="col-md-4">
          <div
            class="card feature-card shadow-sides border-2 border-warning h-100 rounded-4 position-relative hover-card"
            data-aos="zoom-in">
            <div class="ribbon bg-warning text-white fw-bold"><i class="fa-solid fa-star"></i> Unggulan</div>
            <div class="card-body d-flex flex-column">
              <h4 class="fw-bold text-warning">Paket Bulanan</h4>
              <ul class="list-unstyled text-muted mt-3 flex-grow-1 custom-list text-start">
                <li>Semua fitur Mingguan</li>
                <li>Laporan Bulanan Otomatis</li>
                <li>Kategori Keuangan</li>
                <li>Reminder / Notifikasi</li>
              </ul>
              <a href="https://wa.me/6281234567890?text=Halo, saya ingin pesan Paket Bulanan."
                class="btn btn-dark w-100 rounded-pill fw-semibold mt-auto shadow-sm">Pesan</a>
            </div>
          </div>
        </div>

        <!-- Paket Tahunan -->
        <div class="col-md-4">
          <div class="card feature-card shadow-sides border-0 h-100 rounded-4 hover-card" data-aos="zoom-in">
            <div class="card-body d-flex flex-column">
              <h4 class="fw-bold text-warning">Paket Tahunan</h4>
              <ul class="list-unstyled text-muted mt-3 flex-grow-1 custom-list text-start">
                <li>Semua fitur Bulanan</li>
                <li>Laporan Tahunan Detail</li>
                <li>Analisis Grafik Lengkap</li>
                <li>Backup Cloud</li>
              </ul>
              <a href="https://wa.me/6281234567890?text=Halo, saya ingin pesan Paket Tahunan."
                class="btn btn-warning w-100 rounded-pill fw-semibold text-dark mt-auto shadow-sm">Pesan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Testimoni -->
  <section class="py-5 bg-light" id="testimoni">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
      <!-- Judul -->
      <h2 class="text-center mb-3 fw-bold">Apa Kata Mereka?</h2>
      <div class="d-flex justify-content-center mb-4">
        <span class="bg-warning" style="width:80px; height:4px; border-radius:2px;"></span>
      </div>
      <h3 class="text-center text-secondary mb-5">
        Cerita nyata dari mereka yang telah merasakan layanan terbaik kami.
      </h3>

      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <!-- Testimoni 1 -->
          <div class="swiper-slide">
            <div class="card shadow-lg border-0 rounded-4 p-4 text-center">
              <img src="https://i.pravatar.cc/100?img=5" class="rounded-circle mx-auto mb-3" alt="avatar">
              <p class="text-muted fst-italic">“Layanan ini sangat membantu saya dalam mengatur keuangan harian. Sangat
                direkomendasikan!”</p>
              <div class="text-warning mb-2">★★★★★</div>
              <h5 class="fw-bold mb-0">Budi Santoso</h5>
              <small class="text-muted">Pengusaha</small>
            </div>
          </div>

          <!-- Testimoni 2 -->
          <div class="swiper-slide">
            <div class="card shadow-lg border-0 rounded-4 p-4 text-center">
              <img src="https://i.pravatar.cc/100?img=12" class="rounded-circle mx-auto mb-3" alt="avatar">
              <p class="text-muted fst-italic">“User interface-nya modern dan mudah digunakan, cocok untuk siapa saja.”
              </p>
              <div class="text-warning mb-2">★★★★☆</div>
              <h5 class="fw-bold mb-0">Siti Aisyah</h5>
              <small class="text-muted">Mahasiswi</small>
            </div>
          </div>

          <!-- Testimoni 3 -->
          <div class="swiper-slide">
            <div class="card shadow-lg border-0 rounded-4 p-4 text-center">
              <img src="https://i.pravatar.cc/100?img=20" class="rounded-circle mx-auto mb-3" alt="avatar">
              <p class="text-muted fst-italic">“Sangat membantu bisnis saya lebih terkontrol. Fitur-fiturnya lengkap dan
                praktis.”</p>
              <div class="text-warning mb-2">★★★★★</div>
              <h5 class="fw-bold mb-0">Andi Pratama</h5>
              <small class="text-muted">Freelancer</small>
            </div>
          </div>

          <!-- Testimoni 4 -->
          <div class="swiper-slide">
            <div class="card shadow-lg border-0 rounded-4 p-4 text-center">
              <img src="https://i.pravatar.cc/100?img=28" class="rounded-circle mx-auto mb-3" alt="avatar">
              <p class="text-muted fst-italic">“Aplikasi ini membuat saya lebih disiplin dalam mencatat pengeluaran.”
              </p>
              <div class="text-warning mb-2">★★★★☆</div>
              <h5 class="fw-bold mb-0">Rina Marlina</h5>
              <small class="text-muted">Karyawan</small>
            </div>
          </div>

          <!-- Testimoni 5 -->
          <div class="swiper-slide">
            <div class="card shadow-lg border-0 rounded-4 p-4 text-center">
              <img src="https://i.pravatar.cc/100?img=33" class="rounded-circle mx-auto mb-3" alt="avatar">
              <p class="text-muted fst-italic">“Sekarang saya bisa lebih mudah memantau arus kas bulanan keluarga.”</p>
              <div class="text-warning mb-2">★★★★★</div>
              <h5 class="fw-bold mb-0">Joko Widodo</h5>
              <small class="text-muted">Kepala Keluarga</small>
            </div>
          </div>

          <!-- Testimoni 6 -->
          <div class="swiper-slide">
            <div class="card shadow-lg border-0 rounded-4 p-4 text-center">
              <img src="https://i.pravatar.cc/100?img=40" class="rounded-circle mx-auto mb-3" alt="avatar">
              <p class="text-muted fst-italic">“Sistem yang keren dan customer service-nya responsif. Mantap banget!”
              </p>
              <div class="text-warning mb-2">★★★★★</div>
              <h5 class="fw-bold mb-0">Dewi Anggraini</h5>
              <small class="text-muted">Ibu Rumah Tangga</small>
            </div>
          </div>

        </div>

        <!-- Pagination & Navigation -->
        <div class="swiper-pagination mt-4"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <!-- Section Tentang Kami -->
  <section class="py-5" id="tentang" style="margin: 50px 40px;">
    <div class="container" data-aos="fade-up-left" data-aos-duration="1500">
      <div class="row align-items-center g-5">
        <!-- Gambar -->
        <div class="col-lg-6 text-center" data-aos="fade-right">
          <img src="{{asset('asset/img/DompetKu-White.png')}}" alt="Tentang Kami" class="img-fluid rounded-4 shadow"
            style="max-width: 320px;">
        </div>
        <!-- Deskripsi -->
        <div class="col-lg-6" data-aos="fade-left">
          <span class="text-uppercase text-muted small fw-semibold">Kenali Kami</span>
          <h2 class="fw-bold mb-4 section-title text-warning">Tentang Kami</h2>
          <p class="text-muted mb-4">
            Dompet-Ku adalah platform keuangan digital yang membantu Anda mencatat dan mengelola keuangan
            dengan cara yang mudah, praktis, dan modern.
          </p>
          <a href="#"
            class="btn btn-warning rounded-pill px-4 fw-bold text-white d-inline-flex align-items-center gap-2">
            Selengkapnya <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-5" style="background-color:#f4c430;" id="cta">
    <div class="container" data-aos="fade-up-left" data-aos-duration="1500">
      <div class="row align-items-center">
        <!-- Gambar Kiri -->
        <div class="col-md-6 text-center mb-4 mb-md-0">
          <img src="{{asset('asset/img/Consultative sales-pana.png')}}" alt="Konsultasi" class="img-fluid" style="max-height:300px;">
        </div>
        <!-- Deskripsi Kanan -->
        <div class="col-md-6 text-white">
          <h2 class="fw-bold">KONSULTASIKAN<br>KEBUTUHAN BISNISMU</h2>
          <p>Konsultasikan kebutuhan anda dengan kami, kami siap memberikan solusi terbaik untuk kebutuhan anda.</p>
          <a href="https://wa.me/6285799690454" target="_blank" class="btn px-4 py-2 fw-semibold"
            style="background-color:#25D366; color:#ffff; border-radius:30px;">
            <i class="bi bi-whatsapp"></i> +6285799690454
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-light pt-5">
    <div class="container">
      <div class="row gy-4">

        <!-- Logo & Deskripsi -->
        <div class="col-lg-3 col-md-6">
          <img src="{{asset('asset/img/logo.png')}}" alt="Logo" class="mb-3" style="max-width: 100px;">
          <p class="small">Solusi terbaik untuk mimpi dalam kebutuhan digital anda.</p>
        </div>

        <!-- Menu -->
        <div class="col-lg-3 col-md-6">
          <h5 class="fw-bold mb-3 text-warning">Menu</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-decoration-none text-light d-block mb-2">Beranda</a></li>
            <li><a href="#tentang" class="text-decoration-none text-light d-block mb-2">Tentang Kami</a></li>
            <li><a href="#layanan" class="text-decoration-none text-light d-block mb-2">Layanan</a></li>
            <li><a href="#testimoni" class="text-decoration-none text-light d-block mb-2">Testimonial</a></li>
          </ul>
        </div>

        <!-- Layanan -->
        <div class="col-lg-3 col-md-6">
          <h5 class="fw-bold mb-3 text-warning">Layanan</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-decoration-none text-light d-block mb-2">Langganan Keuangan Harian</a></li>
            <li><a href="#" class="text-decoration-none text-light d-block mb-2">Langganan Keuangan Mingguan</a></li>
            <li><a href="#" class="text-decoration-none text-light d-block mb-2">Langganan Keuangan Bulanan</a></li>
            <li><a href="#" class="text-decoration-none text-light d-block mb-2">Langganan Keuangan Tahunan</a></li>
          </ul>
        </div>

        <!-- Kontak -->
        <div class="col-lg-3 col-md-6">
          <h5 class="fw-bold mb-3 text-warning">Kontak Kami</h5>
          <p class="small mb-2"><i class="bi bi-building text-warning"></i> PT Dompet-Ku Indonesia</p>
          <p class="small mb-2"><i class="bi bi-geo-alt text-warning"></i> Teras Randusari , Kab. Boyolali</p>
          <p class="small mb-2"><i class="bi bi-envelope text-warning"></i> DompetKu@gmail.com</p>
          <p class="small"><i class="bi bi-telephone text-warning"></i> +62-857-9969-0454</p>
        </div>
      </div>

      <hr class="border-secondary mt-4">

      <!-- Copyright -->
      <div class="text-center pb-3">
        <small>© 2025 <span class="fw-bold text-warning">Dompetku Indonesia </span>. All Rights Reserved.</small>
      </div>
    </div>
  </footer>


  <a href="https://wa.me/6285799690454" target="_blank"
    class="whatsapp-float d-flex align-items-center justify-content-center">
    <i class="bi bi-whatsapp"></i>
  </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script -->
  <script>
    window.addEventListener("scroll", function () {
      let navbar = document.getElementById("navbar");
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  </script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Aos Init -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        },
      },
    });
  </script>
</body>

</html>
