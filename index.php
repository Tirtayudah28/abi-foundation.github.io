<?php
  // $base_url = "/ABI_Foundation/";
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
  <link rel="stylesheet" href="main.css?v=4.2"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
  <link href="https://unpkg.com/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"
    />
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="overflow-y-hidden">
  <section class="container-hero">
   <?php 
   session_start();
   include 'navbar.php'; 
   ?>

    <!-- Hero Section -->
    
<section class="relative bg-gray-800 bg-center bg-no-repeat bg-cover bg-blend-multiply" style="background-image: url('images/gallery-edit3.jpg');">
  <!-- Overlay untuk brightness -->
  <div class="absolute inset-0 bg-gradient-to-br from-black/60 via-[#002490]/40 to-black/30"></div>

  <div class="relative px-6 py-28 md:py-36 max-w-6xl mx-auto text-center text-white z-10">
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight">
      <span class="text-sky-400">Bersama Membangun</span> <br /> Masa Depan Inovatif
    </h1>
    <p class="mt-6 text-lg md:text-xl text-blue-100 max-w-2xl mx-auto">
      ABI Foundation hadir untuk menginspirasi dan memberdayakan masyarakat melalui pendidikan, teknologi, dan kolaborasi sosial.
    </p>

    <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
      <a href="#tentang-kami" class="inline-flex items-center justify-center px-6 py-3 text-lg font-semibold rounded-lg text-white bg-gradient-to-r from-blue-700 to-sky-500 hover:to-blue-600 shadow-md hover:shadow-lg transition-transform hover:-translate-y-1">
        Jelajahi Misi Kami
        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7"></path>
        </svg>
      </a>

      <a href="#donasi" class="inline-flex items-center justify-center px-6 py-3 text-lg font-medium rounded-lg border border-white text-white hover:bg-white hover:text-blue-900 transition">
        Dukung Kami
      </a>
    </div>
  </div>
</section>


    <!-- Tentang Kami -->
<section id="tentang-kami" class="px-6 pt-20 pb-32 bg-[linear-gradient(to_bottom,_white_10%,_#f3f8ff_30%,_#f3f8ff_90%,_white_100%)]">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

    <!-- Gambar Kreatif -->
    <div class="relative flex justify-center items-center">
      <!-- Gambar Bawah -->
      <div class="absolute z-10 bottom-[-2rem] left-0 w-64 md:left-[8rem] lg:left-[0] sm:w-72 rounded-3xl overflow-hidden shadow-md scale-95 rotate-[-3deg]"
           data-aos="zoom-in" data-aos-delay="200">
        <img src="images/DISKUSI/tentang kami.JPG" alt="Dokumentasi ABI Foundation" class="object-cover w-full h-auto">
      </div>
      <!-- Gambar Atas -->
      <div class="relative w-72 sm:w-80 rounded-3xl overflow-hidden shadow-xl"
           data-aos="zoom-in" data-aos-delay="0">
        <img src="assets/Batch 2.jpg" alt="Kegiatan ABI" class="object-cover w-full h-auto">
      </div>
    </div>

    <!-- Konten Teks Elegan -->
    <div data-aos="fade-left" data-aos-duration="1000" class="relative text-center lg:text-left space-y-6">
      <!-- Ikon Kutipan Pojok Kanan -->
      <div class="absolute -top-8 right-0 text-blue-200 opacity-40" data-aos="fade-down">
        <svg class="w-14 h-14" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9.17 6A4.17 4.17 0 005 10.17v.33A4.5 4.5 0 009.5 15a1.5 1.5 0 100-3A1.5 1.5 0 018 10.5v-.33A1.17 1.17 0 019.17 9H10a1 1 0 000-2H9.17zM18.17 6A4.17 4.17 0 0014 10.17v.33A4.5 4.5 0 0018.5 15a1.5 1.5 0 100-3A1.5 1.5 0 0117 10.5v-.33A1.17 1.17 0 0118.17 9H19a1 1 0 000-2h-.83z"/>
        </svg>
      </div>

      <div class="inline-block bg-blue-100 text-blue-800 text-sm font-semibold px-4 py-1 rounded-full">
        Berdiri sejak Mei 2025
      </div>

      <h2 class="text-4xl md:text-5xl font-bold text-blue-900 leading-tight">
        Membentuk Masa Depan Melalui Pendidikan Kreatif
      </h2>

      <p class="text-gray-700 text-base md:text-lg leading-relaxed">
        <strong>ABI Foundation</strong> hadir sebagai penggerak inovasi di dunia pendidikan, sosial, dan ekonomi. Kami membekali generasi muda dengan keterampilan strategis untuk menghadapi dunia nyata—dengan semangat kolaborasi, teknologi, dan pemberdayaan komunitas.
      </p>

      <blockquote class="border-l-4 border-blue-500 pl-4 italic text-gray-600">
        "Kami memulai langkah ini dengan keyakinan bahwa masa depan yang lebih baik dimulai dari keberanian untuk menciptakan peluang belajar yang bermakna."
      </blockquote>

      <div>
        <a href="#program" class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition transform hover:-translate-y-1 hover:bg-blue-700">
          Jelajahi Misi Kami
        </a>
      </div>
    </div>
  </div>

  <!-- Timeline Sejarah Singkat (Responsive Horizontal with Icons & Lines) -->
  <div class="max-w-6xl mx-auto mt-20 px-4">
    <h3 class="text-2xl font-bold text-center text-blue-800 mb-10">Perjalanan Singkat ABI Foundation</h3>
    <div class="relative flex flex-col md:flex-row justify-between items-start md:items-center gap-10">
      <!-- Garis Penghubung -->
      <div class="absolute top-8 md:top-1/2 left-0 right-0 h-0.5 bg-blue-200 hidden md:block z-0 animate-pulse"></div>

      <!-- Tahun 2025 -->
      <div class="flex flex-col items-center text-center relative z-10 md:flex-1 group" data-aos="fade-up" data-aos-delay="0">
        <div class="bg-blue-600 text-white rounded-full p-4 shadow-lg mb-4 group-hover:scale-110 transition-transform">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.105 0 2 .672 2 1.5S13.105 11 12 11s-2-.672-2-1.5S10.895 8 12 8zm0 4v5" />
          </svg>
        </div>
        <h4 class="font-semibold text-blue-700 mb-1">2025</h4>
        <p class="text-gray-600 text-sm">ABI Foundation diluncurkan sebagai fondasi pendidikan berbasis teknologi kreatif.</p>
      </div>

      <!-- Tahun 2026 -->
      <div class="flex flex-col items-center text-center relative z-10 md:flex-1 group" data-aos="fade-up" data-aos-delay="150">
        <div class="bg-blue-600 text-white rounded-full p-4 shadow-lg mb-4 group-hover:scale-110 transition-transform">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.105 0 2 .672 2 1.5S13.105 11 12 11s-2-.672-2-1.5S10.895 8 12 8zm0 4v5" />
          </svg>
        </div>
        <h4 class="font-semibold text-blue-700 mb-1">2026</h4>
        <p class="text-gray-600 text-sm">Pelatihan digital & wirausaha untuk siswa SMA & mahasiswa diluncurkan.</p>
      </div>

      <!-- Tahun 2027 -->
      <div class="flex flex-col items-center text-center relative z-10 md:flex-1 group" data-aos="fade-up" data-aos-delay="300">
        <div class="bg-blue-600 text-white rounded-full p-4 shadow-lg mb-4 group-hover:scale-110 transition-transform">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.105 0 2 .672 2 1.5S13.105 11 12 11s-2-.672-2-1.5S10.895 8 12 8zm0 4v5" />
          </svg>
        </div>
        <h4 class="font-semibold text-blue-700 mb-1">2027</h4>
        <p class="text-gray-600 text-sm">Kolaborasi nasional dengan mitra pendidikan & sosial dimulai secara masif.</p>
      </div>
    </div>
  </div>

  
    <!-- Fokus Utama -->
  <div class="mt-24">
    <div class="max-w-7xl mx-auto text-center mb-16" data-aos="fade-up">
      <h2 class="text-3xl sm:text-4xl font-bold text-blue-900 mb-2">Maksud dan Tujuan Kami</h2>
      <p class="text-gray-600 text-base sm:text-lg">Kami berkomitmen menciptakan dampak berkelanjutan bagi masyarakat.</p>
    </div>
  
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto" data-aos="fade-up" data-aos-delay="100">
      <!-- Box 1 -->
      <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition hover:scale-100 duration-300">
        <div class="text-blue-600 text-4xl mb-4 animate-fade-in-up"><i class="bi bi-egg"></i></div>
        <h5 class="font-semibold text-lg text-blue-800 mb-2">Peternakan</h5>
        <p class="text-gray-600">Mendorong keberlanjutan peternakan rakyat melalui pelatihan dan kolaborasi inovatif.</p>
      </div>
  
      <!-- Box 2 -->
      <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition hover:scale-100 duration-300">
        <div class="text-green-600 text-4xl mb-4 animate-fade-in-up"><i class="bi bi-tree"></i></div>
        <h5 class="font-semibold text-lg text-green-800 mb-2">Pertanian</h5>
        <p class="text-gray-600">Mengembangkan pertanian berdaya saing melalui teknologi dan pendampingan komunitas.</p>
      </div>
  
      <!-- Box 3 -->
      <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition hover:scale-100 duration-300">
        <div class="text-pink-600 text-4xl mb-4 animate-fade-in-up">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/>
            <path d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25"/>
            <path d="M12.5 15.5l2 2"/>
            <path d="M15 13l2 2"/>
          </svg>
        </div>
        <h5 class="font-semibold text-lg text-pink-800 mb-2">Sosial</h5>
        <p class="text-gray-600">Memperkuat hubungan antar masyarakat melalui kegiatan sosial dan empati kolektif.</p>
      </div>
  
      <!-- Box 4 -->
      <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition hover:scale-100 duration-300">
        <div class="text-red-500 text-4xl mb-4 animate-fade-in-up"><i class="bi bi-person-hearts"></i></div>
        <h5 class="font-semibold text-lg text-red-700 mb-2">Kemanusiaan</h5>
        <p class="text-gray-600">Menumbuhkan nilai kemanusiaan dan solidaritas melalui aksi nyata di lapangan.</p>
      </div>
  
      <!-- Box 5 -->
      <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition hover:scale-100 duration-300">
        <div class="text-yellow-500 text-4xl mb-4 animate-fade-in-up"><i class="bi bi-heart"></i></div>
        <h5 class="font-semibold text-lg text-yellow-600 mb-2">Keagamaan</h5>
        <p class="text-gray-600">Menghidupkan nilai spiritual dan toleransi dalam kehidupan sosial masyarakat.</p>
      </div>
  
      <!-- Box 6 -->
      <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition hover:scale-100 duration-300">
        <div class="text-indigo-600 text-4xl mb-4 animate-fade-in-up"><i class="bi bi-phone"></i></div>
        <h5 class="font-semibold text-lg text-indigo-700 mb-2">Teknologi</h5>
        <p class="text-gray-600">Meningkatkan literasi digital dan solusi teknologi untuk masyarakat luas.</p>
      </div>
  
      <!-- Box 7 -->
      <div class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center hover:shadow-xl transition hover:scale-100 duration-300">
        <div class="text-purple-600 text-4xl mb-4 animate-fade-in-up"><i class="bi bi-mortarboard"></i></div>
        <h5 class="font-semibold text-lg text-purple-700 mb-2">Pendidikan</h5>
        <p class="text-gray-600">Membuka akses dan kualitas pendidikan untuk semua lapisan masyarakat.</p>
      </div>
  
    </div>
  </div>
</section>

<!-- Section CTA Relawan - Ajak Bergabung -->
<section class=" border bg-[url('https://transparenttextures.com/patterns/cubes.png')] bg-repeat bg-[length:150px] py-20 px-6 w-full">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-blue-900 mb-4">Jadilah Bagian dari Perubahan</h2>
    <p class="text-lg text-blue-800 mb-8 max-w-2xl mx-auto">
      Bergabunglah sebagai relawan, fasilitator, atau mitra ABI Foundation untuk menciptakan dampak nyata bersama kami.
    </p>
    <a href="<?= $base_url ?>daftar-relawan/" class="inline-block px-8 py-4 bg-blue-700 hover:bg-blue-800 text-white text-lg font-semibold rounded-full shadow-lg transition-transform hover:-translate-y-1">
      Daftar Jadi Relawan
    </a>
  </div>
</section>



     <!-- Swiper -->
<section class="all-content overflow-hidden  px-4 py-[5rem] bg-[linear-gradient(to_bottom,_#f3f8ff_30%,_white_70%,_#f3f8ff_100%,)] border-none bg-[url('https://www.transparenttextures.com/patterns/paper-fibers.png')]">
  <div class="max-w-7xl mx-auto space-y-10">

    <!-- ✨ Judul -->
    <div
      class="bg-gradient-to-r from-blue-700 via-cyan-500 to-teal-300 rounded-xl py-2 px-6 text-center shadow-xl"
    >
      <h2
        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold text-transparent bg-clip-text text-white font-extrabold tracking-wide sm:leading-tight"
      >
        Ikuti Momen Inspiratif Kami
      </h2>
      <p
        class="mt-3 text-slate-100 text-base text-sm sm:text-base md:text-lg lg:text-xl font-medium max-w-3xl mx-auto"
      >
        Jelajahi berbagai kegiatan, pelatihan, dan event menarik dari ABI Foundation
      </p>
    </div>


    <!-- 🖼️ Swiper Utama -->
    <div class="swiper mySwiper2 rounded-xl overflow-hidden ">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="assets/Batch 2.jpg" /></div>
        <div class="swiper-slide"><img src="assets/Batch 3.jpg" /></div>
        <div class="swiper-slide"><img src="assets/WhatsApp Image 2025-04-29 at 17.14.50_506d5124.jpg" /></div>
        <div class="swiper-slide"><img src="assets/WhatsApp Image 2025-05-23 at 15.12.31_c6e20d49.jpg" /></div>
        <div class="swiper-slide"><img src="assets/Soft Launching.jpg" /></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <!-- 🧩 Swiper Thumbnail -->
    <div thumbsSlider class="swiper mySwiper mt-6">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="assets/Batch 2.jpg" /></div>
        <div class="swiper-slide"><img src="assets/Batch 3.jpg" /></div>
        <div class="swiper-slide"><img src="assets/WhatsApp Image 2025-04-29 at 17.14.50_506d5124.jpg" /></div>
        <div class="swiper-slide"><img src="assets/WhatsApp Image 2025-05-23 at 15.12.31_c6e20d49.jpg" /></div>
        <div class="swiper-slide"><img src="assets/Soft Launching.jpg" /></div>
      </div>
    </div>

  </div>

  <!-- 🔍 Modal Fullscreen -->
  <div id="fullscreenModal" class="fixed inset-0 bg-black bg-opacity-90 flex justify-center items-center z-[9999] hidden">
    <span class="absolute top-4 right-6 text-white text-4xl cursor-pointer" id="modalClose">&times;</span>
    <img id="modalImage" src="" alt="Fullscreen Image" class="max-w-full max-h-[90vh] object-contain" />
  </div>
</section>


    <!-- Footer -->
<!-- 🔷 Donasi Banner di atas Footer -->
<section class="relative py-20 px-6 text-white">
  <!-- Background Blur Image -->
  <div class="absolute inset-0 bg-cover bg-center filter brightness-30 blur-sm" style="background-image: url('assets/WhatsApp Image 2025-04-13 at 22.25.02_0dcd6e70.jpg');"></div>
  <!-- Overlay Konten -->
  <div class="relative z-10 max-w-4xl mx-auto text-center">
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
      <div class="text-5xl text-sky-400 animate-pulse">
        <i class="bi bi-heart-fill"></i>
      </div>
      <div>
        <h3 class="text-3xl sm:text-4xl font-extrabold mb-2">Dukung Misi Sosial dan Pendidikan Kami</h3>
        <p class="text-white text-base sm:text-lg mb-4">Bersama Anda, kami bisa menciptakan masa depan yang lebih baik bagi semua.</p>
        <a href="<?= $base_url ?>donasi" id="donasi" class="inline-block mt-2 bg-cyan-500 text-white font-bold text-lg px-6 py-3 rounded-full shadow-md hover:shadow-lg transition-transform hover:-translate-y-1">
          Donasi Sekarang
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 🔵 Footer -->
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
        <a href="#" class="hover:text-blue-200 transition"><i class="bi bi-instagram"></i></a>
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
      <a href="#donasi" class="inline-flex items-center gap-2 bg-white text-[#002490] px-4 py-2 rounded-lg font-semibold shadow hover:shadow-md hover:scale-105 transition">
        <i class="bi bi-heart-fill text-sky-500"></i> Donasi Sekarang
      </a>
    </div>

  </div>

  <div class="mt-12 border-t border-blue-800 pt-6 text-center text-sm text-blue-200">
    © 2025 ABI Foundation. Semua Hak Cipta Dilindungi.
  </div>
</footer>


  </section>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});

var swiper2 = new Swiper(".mySwiper2", {
  loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  thumbs: {
    swiper: swiper,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 30,
      centeredSlides: false,
    },
    490: {
      slidesPerView: 3,
      spaceBetween: 30,
      centeredSlides: true,
    },
  },
});

// Pause autoplay saat hover
const swiperContainer = document.querySelector(".mySwiper2");
swiperContainer.addEventListener("mouseenter", () => swiper2.autoplay.stop());
swiperContainer.addEventListener("mouseleave", () => swiper2.autoplay.start());

// FULLSCREEN MODAL IMAGE
document.querySelectorAll(".mySwiper2 .swiper-slide img").forEach(img => {
  img.addEventListener("click", () => {
    document.getElementById("modalImage").src = img.src;
    document.getElementById("fullscreenModal").classList.remove("hidden");
  });
});

document.getElementById("modalClose").addEventListener("click", () => {
  document.getElementById("fullscreenModal").classList.add("hidden");
});

</script>

</body>
</html>
