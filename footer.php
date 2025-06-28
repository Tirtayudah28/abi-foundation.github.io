<?php  
  include 'config/koneksi.php';
?>
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
  <link rel="stylesheet" href="main.css?v=3.0" />
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
<body>

   <!-- Footer -->
<footer class="bg-[#002490] text-white pt-16 pb-10 px-6" data-aos="fade-up" data-aos-delay="200">
  <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

    <!-- Logo dan Deskripsi -->
    <div>
      <h2 class="text-2xl font-bold mb-4">ABI Foundation</h2>
      <p class="text-sm text-blue-100 mb-6">
        Membangun masa depan lebih baik melalui pendidikan, inovasi, dan pemberdayaan.
      </p>
      <div class="flex gap-3 text-white text-xl">
        <a href="#" class="hover:text-blue-200 transition"><i class="bi bi-facebook"></i></a>
        <a href="#" class="hover:text-blue-200 transition"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.instagram.com/abi.foundation_medan/" class="hover:text-blue-200 transition"><i class="bi bi-instagram"></i></a>
        <a href="#" class="hover:text-blue-200 transition"><i class="bi bi-youtube"></i></a>
        <a href="#" class="hover:text-blue-200 transition"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <!-- Kontak -->
    <div>
      <h3 class="text-xl font-semibold mb-4">Hubungi Kami</h3>
      <ul class="space-y-2 text-sm text-blue-100">
        <li><i class="bi bi-geo-alt"></i> Jl. Sei Selayang, No.27, Medan</li>
        <li><i class="bi bi-telephone"></i> +62 22 7401 6977</li>
        <li><i class="bi bi-envelope"></i> abiconsultantmdn@gmail.com</li>
      </ul>
    </div>

    <!-- Tautan Cepat -->
    <div>
      <h3 class="text-xl font-semibold mb-4">Tautan Cepat</h3>
      <ul class="space-y-2 text-sm text-blue-100">
        <li><a href="<?= $base_url ?>tentang-kami" class="hover:text-white transition">Tentang Kami</a></li>
        <li><a href="<?= $base_url ?>berita" class="hover:text-white transition">Berita Baru</a></li>
        <li><a href="<?= $base_url ?>publikasi" class="hover:text-white transition">Galeri Kegiatan</a></li>
        <li><a href="#" class="hover:text-white transition">Blog Kami</a></li>
        <li><a href="#" class="hover:text-white transition">Kebijakan Privasi</a></li>
        <li><a href="#" class="hover:text-white transition">Syarat &amp; Ketentuan</a></li>
      </ul>
    </div>

    <!-- Donasi (Tetap di sini sebagai duplikat CTA opsional) -->
    <div>
      <h3 class="text-xl font-semibold mb-4">Dukung Misi Kami</h3>
      <p class="text-sm text-blue-100 mb-4">Bantu kami mewujudkan pendidikan dan masa depan lebih baik dengan berdonasi.</p>
      <a href="<?= $base_url ?>donasi" class="inline-flex items-center gap-2 bg-white text-[#002490] px-4 py-2 rounded-lg font-semibold shadow hover:shadow-md hover:scale-105 transition">
        <i class="bi bi-heart-fill text-sky-500"></i> Donasi Sekarang
      </a>
    </div>

  </div>

  <div class="mt-12 border-t border-blue-800 pt-6 text-center text-sm text-blue-200">
    © 2025 ABI Foundation. Semua Hak Cipta Dilindungi.
  </div>
</footer>

    <!-- Scripts -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>
  <script src="script.js"></script>
</body>
</html>
