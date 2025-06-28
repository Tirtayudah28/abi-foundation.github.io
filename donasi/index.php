<?php
 session_start();
  // $base_url = "/ABI_Foundation/";
  include '../config/koneksi.php';
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
   include '../navbar.php'; 
   ?>

<!--  Halaman Donasi ABI Foundation -->
<section id="donasi" class="py-24 px-6 mt-[5rem] bg-gradient-to-b from-[#f3f8fc] via-white to-[#f0f4f8]">
  <div class="max-w-5xl mx-auto text-center mb-16">
    <h2 class="text-4xl sm:text-5xl font-extrabold text-blue-900 mb-4">Dukung Perjalanan Kebaikan Kami</h2>
    <p class="text-gray-700 text-base sm:text-lg max-w-2xl mx-auto">
      Donasi Anda akan menjadi bahan bakar untuk program pendidikan, sosial, dan pemberdayaan yang kami jalankan. Mari berkontribusi dan jadi bagian dari perubahan.
    </p>
  </div>

  <!-- Pilihan Nominal Donasi -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
    <!-- Card 1 -->
    <div class="bg-white border border-blue-100 rounded-2xl p-6 shadow hover:shadow-xl hover:-translate-y-1 transition">
      <h3 class="text-2xl font-bold text-blue-800 mb-2">Rp 25.000</h3>
      <p class="text-gray-600 mb-4">Bantu satu siswa mendapatkan akses pelatihan online gratis.</p>
      <a href="#" class="inline-block bg-blue-700 text-white font-semibold px-5 py-2 rounded-lg hover:bg-blue-800 transition">Donasi Sekarang</a>
    </div>

    <!-- Card 2 -->
    <div class="bg-white border border-blue-100 rounded-2xl p-6 shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
      <h3 class="text-2xl font-bold text-sky-700 mb-2">Rp 50.000</h3>
      <p class="text-gray-600 mb-4">Dukung penyediaan materi kreatif untuk pelajar daerah.</p>
      <a href="#" class="inline-block bg-sky-600 text-white font-semibold px-5 py-2 rounded-lg hover:bg-sky-700 transition">Donasi Sekarang</a>
    </div>

    <!-- Card 3 -->
    <div class="bg-white border border-blue-100 rounded-2xl p-6 shadow hover:shadow-xl hover:-translate-y-1 transition">
      <h3 class="text-2xl font-bold text-blue-900 mb-2">Rp 100.000</h3>
      <p class="text-gray-600 mb-4">Kontribusi Anda akan membantu satu program pelatihan berjalan lebih luas.</p>
      <a href="#" class="inline-block bg-green-700 text-white font-semibold px-5 py-2 rounded-lg hover:brightness-110 transition">Donasi Sekarang</a>
    </div>
  </div>

  <!-- Form Donasi Bebas -->
  <div class="mt-24 max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-10 border border-blue-100">
    <h3 class="text-3xl font-bold text-blue-900 text-center mb-4">Donasi Bebas</h3>
    <p class="text-center text-gray-600 mb-8">Masukkan nominal sesuai keikhlasan Anda dan pilih metode pembayaran.</p>
    <form action="#" method="POST" class="space-y-6">
      <div>
        <label class="block text-sm font-semibold text-blue-800 mb-1">Nama Lengkap</label>
        <input type="text" name="nama" required placeholder="Nama Anda" class="w-full px-4 py-3 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div>
        <label class="block text-sm font-semibold text-blue-800 mb-1">Nominal Donasi (Rp)</label>
        <input type="number" name="nominal" required placeholder="Contoh: 50000" class="w-full px-4 py-3 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div>
        <label class="block text-sm font-semibold text-blue-800 mb-1">Metode Pembayaran</label>
        <select name="metode" required class="w-full px-4 py-3 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="">-- Pilih Metode --</option>
          <option>Transfer Bank</option>
          <option>QRIS</option>
          <option>Gopay / OVO / DANA</option>
          <option>Paypal</option>
        </select>
      </div>
      <div>
        <label class="block text-sm font-semibold text-blue-800 mb-1">Pesan / Doa (opsional)</label>
        <textarea name="pesan" rows="3" placeholder="Pesan Anda..." class="w-full px-4 py-3 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class=" text-blue-700 px-8 py-3 rounded-full font-semibold shadow hover:-translate-y-1 transition-transform">
          Kirim Donasi
        </button>
      </div>
    </form>
  </div>
</section>



<!-- Footer -->
<?php 
    include '../footer.php';
?>


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

</body>
</html>
