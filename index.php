<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <title>ABI Foundation</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="main.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://unpkg.com/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"
    />
</head>
<body >
  <section class="container-hero">
   <?php 
   session_start();
   include 'navbar.php'; 
   ?>

    <!-- Hero Section -->
    <div class="container-isi-header ">
      <div class="content-background">
        <div class="sisi-kiri">
          <div class="tagline">
            <h1 data-translate="tagline" data-aos="fade-down" data-aos-delay="400">Selamat Datang di ABI Foundation</h1>
            <span data-translate="tagline2" data-aos="fade-down" data-aos-delay="600">Menginspirasi dan memperdayakan</span>
          </div>
          <div class="button-in-full" data-aos="fade-down" data-aos-delay="800">
            <div class="button-link"> 
              <a href="#"><button class="link-1">Pelajari Lebih Lanjut <i class="bi bi-arrow-right large fs-5"></i></button></a>
            </div>
          </div>
        </div>
        <div class="sisi-kanan" data-aos="fade-left" data-aos-duration="400">
          <img src="images/DISKUSI/gallery.JPG" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Konten utama -->
  <section class="all-content overflow-hidden">
    <!-- Slider -->
    <div class="slider-container">
      <div class="swiper tripleSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/DISKUSI/DSC05820.JPG" alt="1"></div>
          <div class="swiper-slide"><img src="images/DISKUSI/tentang kami.JPG" alt="2"></div>
          <div class="swiper-slide"><img src="images/DISKUSI/tentang kami.JPG" alt="3"></div>
          <div class="swiper-slide"><img src="images/DISKUSI/tentang kami.JPG" alt="4"></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- Tentang Kami -->
    <div class="wrapper-content">
      <div class="tentang-kami">
        <div class="tentang-kami-img">
          <div class="images" data-aos="zoom-in" data-aos-duration="1000">
            <img src="assets/Batch 2.jpg" alt="">
          </div>
          <div class="images2" data-aos="zoom-in" data-aos-duration="1500">
            <img src="images/DISKUSI/tentang kami.JPG" alt="">
          </div>
        </div>
        <div class="content-text">
          <span data-translate="tentang-kami" data-aos="fade-left" data-aos-duration="1000">Tentang ABI Foundation</span>
          <div class="text" data-aos="fade-left" data-aos-duration="1000">
            ABI Foundation diluncurkan pada 1 Mei 2025 untuk membangun ekosistem pendidikan berbasis teknologi kreatif. Kami fokus pada konsultasi dan pelatihan generasi muda dalam pendidikan menengah dan tinggi.
            <br><br>
            Melalui berbagai program inovatif di bidang pendidikan, sosial, dan ekonomi, kami membangun fondasi masa depan yang lebih baik.
          </div>
        </div>
      </div>
    </div>

    <!-- Fokus Utama -->
    <div class="visi-misi">
      <div class="judul-tagline"><h1 data-translate="focus-title">Fokus Utama Kami</h1></div>
      <div class="title-tagline">
        <p data-translate="focus-subtitle">Kami berkomitmen memberikan kontribusi nyata untuk masyarakat.</p>
      </div>
      <div class="box-wrapper">
        <!-- Pemberdayaan Komunitas -->
        <div class="container-box" data-aos="slide-up" data-aos-delay="100">
          <div class="conten-box">
            <div class="isi-logo"><div class="logo"><i class="bi bi-people fs-2"></i></div></div>
            <h5 data-translate="box1-title">Pemberdayaan Komunitas</h5>
            <p data-translate="box1-text">Kami bekerja sama menciptakan perubahan positif berkelanjutan</p>
            <a href="#">Lihat Detail <i class="bi bi-arrow-right-short"></i></a>
          </div>
        </div>

        <!-- Akses Pendidikan -->
        <div class="container-box" data-aos="slide-up" data-aos-delay="200">
          <div class="conten-box">
            <div class="isi-logo"><div class="logo"><i class="bi bi-book"></i></div></div>
            <h5 data-translate="box2-title">Akses Pendidikan Berkualitas</h5>
            <p data-translate="box2-text">Menyediakan sarana dan program pendidikan</p>
            <a href="#">Lihat Detail <i class="bi bi-arrow-right-short"></i></a>
          </div>
        </div>

        <!-- Inisiatif Sosial -->
        <div class="container-box" data-aos="slide-up" data-aos-delay="300">
          <div class="conten-box">
            <div class="isi-logo"><div class="logo">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-heart-handshake">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                <path d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25"></path>
                <path d="M12.5 15.5l2 2"></path>
                <path d="M15 13l2 2"></path>
              </svg>
            </div></div>
            <h5 data-translate="box3-title">Inisiatif Sosial</h5>
            <p data-translate="box3-text">Mendukung kegiatan sosial dan kerja sama strategis</p>
            <a href="#" data-translate="view-details">Lihat Detail <i class="bi bi-arrow-right-short"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="site-footer" data-aos="fade-up" data-aos-delay="200">
      <div class="border-footer">
        <div class="wrapper-footer">
          <div class="site-left">
            <div class="judul-footer">ABI Foundation</div>
            <p class="text-footer-left" data-translate="footer-text">Membangun masa depan lebih baik melalui pendidikan, inovasi, dan pemberdayaan.</p>
            <div class="sosial-media">
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-youtube"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="site-center">
            <div class="judul-footer-sejoli" data-translate="footer-contact-title">Hubungi Kami</div>
            <p class="location"><i class="bi bi-geo-alt"></i> Jl. Inspirasi No.123, Kota Harapan, Indonesia</p>
            <p class="call"><i class="bi bi-telephone"></i> +62 12 5676 765</p>
            <p class="email"><i class="bi bi-envelope"></i> info@abifoundation.com</p>
          </div>
          <div class="site-right">
            <div class="judul-footer-sejoli" data-translate="footer-links-title">Tautan Cepat</div>
            <a href="#" data-translate="footer-about">Tentang Kami</a>
            <a href="#" data-translate="footer-news">Berita Baru</a>
            <a href="#" data-translate="footer-gallery">Galeri Kegiatan</a>
            <a href="#" data-translate="footer-blog">Blog Kami</a>
            <a href="#" data-translate="footer-policy">Kebijakan Privasi</a>
            <a href="#" data-translate="footer-terms">Syarat &amp; ketentuan</a>
          </div>
        </div>
      </div>
      <div class="copy-right" data-translate="copyright">
        © 2025 ABI Foundation. Semua Hak Cipta Dilindungi.
      </div>
    </footer>
  </section>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
<script>
  new Swiper(".tripleSwiper", {
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: false
      },
      490: {
        slidesPerView: 3,
        spaceBetween: 30,
        centeredSlides: true
      }
    }
  });
</script>

</body>
</html>
