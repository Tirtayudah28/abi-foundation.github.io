<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="style.css?v=2.0" />
    <link rel="stylesheet" href="../main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
</head>
<body>

      <!-- section navbar -->
     <?php 
      include '../navbar.php';
     ?>

<section class="py-24 mt-[5rem]  border-b border-b-sky-600 text-center bg-blue-700 bg-[url('https://transparenttextures.com/patterns/cubes.png')] "> <!-- bg-[length:300px] -->
  <div class="max-w-3xl px-3 sm:px-3 mx-auto" data-aos="fade-down" data-aos-delay="200">
    <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4">Kenali ABI Foundation Lebih Dekat</h1>
    <p class="text-lg md:text-xl text-white leading-relaxed">
      Pelajari bagaimana visi besar, misi sosial, dan nilai-nilai kami menjadi fondasi dalam membentuk masa depan yang berdaya dan berdampak.
    </p>
  </div>
</section>


<!--  Section Cerita Kami / About ABI Foundation - Versi Profesional & Interaktif -->
<section class="py-28 px-6 bg-[linear-gradient(to bottom, rgba(245,250,255,1) 10%, rgba(255,255,255,1) 80%, rgba(245,250,255,1) 100%)] relative overflow-hidden">
  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

    <!-- Gambar Ilustratif Baru -->
    <div class="relative" data-aos="zoom-in" data-aos-delay="100">
      <img src="../assets/Batch 2.jpg" alt="Visi ABI" class="rounded-3xl shadow-xl w-full h-auto object-cover">
      <div class="absolute -top-6 -left-6 bg-white px-4 py-2 text-sm font-semibold text-sky-600 rounded shadow-md">
        Sejak 2025
      </div>
    </div>

    <!-- Konten Teks Cerita Kami -->
    <div data-aos="fade-left" data-aos-delay="200" class="text-center lg:text-left space-y-6">
      <h2 class="text-4xl sm:text-5xl font-extrabold text-blue-900 leading-tight">Cerita Kami</h2>
      <p class="text-gray-700 text-base sm:text-lg leading-relaxed font-[\'Inter\',sans-serif]">
        <strong>ABI Foundation</strong> terlahir dari mimpi sederhana: menciptakan perubahan sosial yang bermakna dan berkelanjutan. Dengan fondasi pada <span class="text-sky-600 font-medium">pendidikan kreatif dan teknologi</span>, kami bergerak bersama generasi muda untuk menciptakan masa depan yang lebih cerah.
      </p>
      <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
        Melalui kerja kolaboratif dan program yang berpihak pada masyarakat, kami percaya bahwa setiap aksi kecil mampu membangun perubahan besar. <em>Inovasi, empati, dan semangat komunitas</em> adalah nafas dalam setiap langkah kami.
      </p>

      <blockquote class="border-l-4 border-sky-400 pl-4 italic text-gray-600">
        “Kami tidak hanya membangun program. Kami membangun harapan.”
      </blockquote>

      <a href="#program" class="inline-block mt-4 px-6 py-3 bg-sky-600 hover:bg-sky-700 text-white text-base font-semibold rounded-full shadow transition-transform hover:-translate-y-1">
        Jelajahi Program Kami
      </a>
    </div>
  </div>

  <!-- Hiasan Aesthetic -->
  <div class="absolute bottom-0 right-0 opacity-10 w-64 h-64 bg-[url('https://www.transparenttextures.com/patterns/arches.png')] bg-repeat z-0"></div>
</section>



    <!--  Section Visi, Misi, dan Nilai ABI Foundation -->
<!-- Visi Misi Nilai -->
<section class="py-24 px-6 text-center bg-[linear-gradient(to_bottom,_#ffffff_0%,_#f0f8ff_70%,_#e6f1ff_100%)]">
  <div class="max-w-6xl mx-auto mb-16">
    <h2 class="text-4xl sm:text-5xl font-extrabold text-blue-900 mb-4" data-aos="fade-up" data-aos-delay="200">Visi, Misi, dan Nilai Kami</h2>
    <p class="text-gray-700 text-base sm:text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="300">
      Landasan fundamental yang memandu setiap tindakan dan keputusan ABI Foundation.
    </p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto" data-aos="fade-up" data-aos-delay="400">
    <div class="bg-white border border-blue-100 rounded-2xl p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
      <div class="flex justify-center items-center w-16 h-16 rounded-full bg-sky-100 text-sky-600 text-3xl mb-4 mx-auto">
        <i class="bi bi-eye"></i>
      </div>
      <h3 class="text-xl font-semibold text-blue-800 mb-3">Visi Kami</h3>
      <p class="text-gray-600 text-sm leading-relaxed">
        Menjadi lembaga terdepan dalam inovasi sosial yang memberdayakan masyarakat menuju kehidupan yang lebih sejahtera dan berkelanjutan.
      </p>
    </div>
    <div class="bg-white border border-sky-100 rounded-2xl p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
      <div class="flex justify-center items-center w-16 h-16 rounded-full bg-blue-100 text-blue-600 text-3xl mb-4 mx-auto">
        <i class="bi bi-crosshair"></i>
      </div>
      <h3 class="text-xl font-semibold text-blue-800 mb-3">Misi Kami</h3>
      <ul class="text-gray-600 text-sm list-disc list-inside space-y-1 text-left">
        <li>Mengembangkan program pendidikan yang inklusif dan berkualitas.</li>
        <li>Mendorong inovasi sosial untuk solusi permasalahan masyarakat.</li>
        <li>Memberdayakan komunitas melalui peningkatan kapasitas.</li>
      </ul>
    </div>
    <div class="bg-white border border-sky-100 rounded-2xl p-8 shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
      <div class="flex justify-center items-center w-16 h-16 rounded-full bg-indigo-100 text-indigo-600 text-3xl mb-4 mx-auto">
        <i class="bi bi-award"></i>
      </div>
      <h3 class="text-xl font-semibold text-blue-800 mb-3">Nilai-Nilai Kami</h3>
      <ul class="text-gray-600 text-sm list-disc list-inside space-y-1 text-left">
        <li>Integritas</li>
        <li>Kolaborasi</li>
        <li>Inovasi</li>
        <li>Empati</li>
        <li>Disiplin</li>
      </ul>
    </div>
  </div>
</section>

<!-- Tim Pendiri -->
<section class="relative py-28 px-6 bg-[linear-gradient(to_bottom,_#e6f1ff_10%,_#ffffff_70%)] overflow-hidden">
  <div class="absolute inset-0 z-0 bg-[url('https://transparenttextures.com/patterns/gplay.png')] opacity-10"></div>
  <div class="relative z-10 max-w-7xl mx-auto mb-16">
    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="text-left md:w-2/3" data-aos="fade-right" data-aos-delay="100">
        <h2 class="text-4xl sm:text-5xl font-extrabold text-blue-900 mb-3">Tim Pendiri ABI Foundation</h2>
        <p class="text-base sm:text-lg text-gray-600 max-w-xl">
          Individu luar biasa yang menggerakkan visi dan misi ABI Foundation untuk masa depan Indonesia yang lebih baik.
        </p>
      </div>
      <div class="hidden md:block md:w-1/3" data-aos="fade-left" data-aos-delay="200">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Icon Team" class="w-28 h-28 opacity-30 mx-auto">
      </div>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">
     <!-- 🌀 Card: Aditya -->
    <div class="perspective hover:scale-[1.02] transition-transform">
      <div onclick="this.classList.toggle('rotate-y-180')" class="card-flip relative w-full h-[400px] transition-transform duration-700 preserve-3d">
      
        <div class="absolute inset-0 bg-white border border-blue-100 hover:border-blue-500 rounded-3xl shadow-lg flex flex-col items-center justify-center backface-hidden p-6 cursor-pointer">
          <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-sky-100 hover:border-blue-400 mb-4">
            <img src="../assets/pak-aditya.jpg" alt="Aditya" class="w-full h-full object-cover">
          </div>
          <h4 class="text-2xl font-bold text-blue-800">Aditya, S.T</h4>
          <p class="text-sky-600 text-sm font-medium">Ketua Yayasan</p>
          <div class="flex gap-4 mt-4 text-blue-600">
            <i class="bi bi-facebook"></i><i class="bi bi-linkedin"></i><i class="bi bi-envelope"></i>
          </div>
        </div>
        <div class="absolute inset-0 bg-blue-50 rounded-3xl shadow-lg p-6 text-center transform rotate-y-180 backface-hidden flex flex-col items-center justify-center">
          <svg class="w-10 h-10 text-blue-300 mb-3" fill="currentColor"><path d="M9.17 6A4.17..."/></svg>
          <p class="text-blue-900 italic">“Pemimpin sejati bukan hanya memberi arah, tapi menyalakan semangat dalam hati orang lain.”</p>
          <span class="mt-2 text-sky-600 text-sm">— Aditya</span>
        </div>
      </div>
    </div>

    <!-- 🌀 Card: Ikhsan -->
    <div class="perspective hover:scale-[1.02] transition-transform">
      <div onclick="this.classList.toggle('rotate-y-180')" class="card-flip relative w-full h-[400px] transition-transform duration-700 preserve-3d">
        <div class="absolute inset-0 bg-white border border-blue-100 hover:border-blue-500 rounded-3xl shadow-lg flex flex-col items-center justify-center backface-hidden p-6 cursor-pointer">
          <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-sky-100 hover:border-blue-400 mb-4">
            <img src="../assets/ir.ihksan.jpg" alt="Ikhsan" class="w-full h-full object-cover">
          </div>
          <h4 class="text-2xl font-bold text-blue-800">Ir. Ikhsan</h4>
          <p class="text-sky-600 text-sm font-medium">Pembina Yayasan</p>
          <div class="flex gap-4 mt-4 text-blue-600">
            <i class="bi bi-facebook"></i><i class="bi bi-linkedin"></i><i class="bi bi-envelope"></i>
          </div>
        </div>
        <div class="absolute inset-0 bg-blue-50 rounded-3xl shadow-lg p-6 text-center transform rotate-y-180 backface-hidden flex flex-col items-center justify-center">
          <svg class="w-10 h-10 text-blue-300 mb-3" fill="currentColor"><path d="M9.17 6A4.17..."/></svg>
          <p class="text-blue-900 italic">“Nilai dan kepercayaan adalah fondasi utama dalam membangun masyarakat.”</p>
          <span class="mt-2 text-sky-600 text-sm">— Ikhsan</span>
        </div>
      </div>
    </div>

    <!-- 🌀 Card: Ilyas -->
    <div class="perspective hover:scale-[1.02] transition-transform">
      <div onclick="this.classList.toggle('rotate-y-180')" class="card-flip relative w-full h-[400px] transition-transform duration-700 preserve-3d">
        <div class="absolute inset-0 bg-white border border-blue-100 hover:border-blue-500 rounded-3xl shadow-lg flex flex-col items-center justify-center backface-hidden p-6 cursor-pointer">
          <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-sky-100 hover:border-blue-400 mb-4">
            <img src="../assets/pak-ilyas-tarigan.jpg" alt="Ilyas" class="w-full h-full object-cover">
          </div>
          <h4 class="text-2xl font-bold text-blue-800">Drs. M. Ilyas Tarigan</h4>
          <p class="text-sky-600 text-sm font-medium">Pengawas Yayasan</p>
          <div class="flex gap-4 mt-4 text-blue-600">
            <i class="bi bi-facebook"></i><i class="bi bi-linkedin"></i><i class="bi bi-envelope"></i>
          </div>
        </div>
        <div class="absolute inset-0 bg-blue-50 rounded-3xl shadow-lg p-6 text-center transform rotate-y-180 backface-hidden flex flex-col items-center justify-center">
          <svg class="w-10 h-10 text-blue-300 mb-3" fill="currentColor"><path d="M9.17 6A4.17..."/></svg>
          <p class="text-blue-900 italic">“Transparansi dan pengawasan adalah kunci membangun kepercayaan publik.”</p>
          <span class="mt-2 text-sky-600 text-sm">— Ilyas</span>
        </div>
      </div>
    </div>

    <!-- 🌀 Card: Bobby -->
    <div class="perspective hover:scale-[1.02] transition-transform">
      <div onclick="this.classList.toggle('rotate-y-180')" class="card-flip relative w-full h-[400px] transition-transform duration-700 preserve-3d">
        <div class="absolute inset-0 bg-white border border-blue-100 hover:border-blue-500 rounded-3xl shadow-lg flex flex-col items-center justify-center backface-hidden p-6 cursor-pointer">
          <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-sky-100 hover:border-blue-400 mb-4">
            <img src="../assets/pak-bobby_umroh.jpg" alt="Bobby" class="w-full h-full object-cover">
          </div>
          <h4 class="text-2xl font-bold text-blue-800">Bobby Umroh, Ph.D</h4>
          <p class="text-sky-600 text-sm font-medium">Bendahara</p>
          <div class="flex gap-4 mt-4 text-blue-600">
            <i class="bi bi-facebook"></i><i class="bi bi-linkedin"></i><i class="bi bi-envelope"></i>
          </div>
        </div>
        <div class="absolute inset-0 bg-blue-50 rounded-3xl shadow-lg p-6 text-center transform rotate-y-180 backface-hidden flex flex-col items-center justify-center">
          <svg class="w-10 h-10 text-blue-300 mb-3" fill="currentColor"><path d="M9.17 6A4.17..."/></svg>
          <p class="text-blue-900 italic">“Manajemen keuangan yang sehat adalah fondasi keberlanjutan misi sosial.”</p>
          <span class="mt-2 text-sky-600 text-sm">— Bobby</span>
        </div>
      </div>
    </div>

    <!-- 🌀 Card: Alkausar -->
    <div class="perspective hover:scale-[1.02] transition-transform">
      <div onclick="this.classList.toggle('rotate-y-180')" class="card-flip relative w-full h-[400px] transition-transform duration-700 preserve-3d">
        <div class="absolute inset-0 bg-white border border-blue-100 hover:border-blue-500 rounded-3xl shadow-lg flex flex-col items-center justify-center backface-hidden p-6 cursor-pointer">
          <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-sky-100 hover:border-blue-400 mb-4">
            <img src="../assets/pak-alkausar_lingga.jpg" alt="Alkausar" class="w-full h-full object-cover">
          </div>
          <h4 class="text-2xl font-bold text-blue-800">Alkausar Lingga, M.Pd</h4>
          <p class="text-sky-600 text-sm font-medium">Sekretaris</p>
          <div class="flex gap-4 mt-4 text-blue-600">
            <i class="bi bi-facebook"></i><i class="bi bi-linkedin"></i><i class="bi bi-envelope"></i>
          </div>
        </div>
        <div class="absolute inset-0 bg-blue-50 rounded-3xl shadow-lg p-6 text-center transform rotate-y-180 backface-hidden flex flex-col items-center justify-center">
          <svg class="w-10 h-10 text-blue-300 mb-3" fill="currentColor"><path d="M9.17 6A4.17..."/></svg>
          <p class="text-blue-900 italic">“Dokumentasi dan komunikasi adalah jembatan antara ide dan eksekusi.”</p>
          <span class="mt-2 text-sky-600 text-sm">— Alkausar</span>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="mt-20 max-w-3xl mx-auto text-center border-l-4 border-sky-400 pl-2" data-aos="fade-up" data-aos-delay="400">
    <svg class="w-12 h-12 text-sky-300 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
      <path d="M9.17 6A4.17 4.17 0..."></path>
    </svg>
    <p class="text-xl font-medium text-blue-900 mb-2">“Kami percaya perubahan besar dimulai dari langkah kecil yang dilakukan bersama.”</p>
    <span class="text-sky-600 text-sm">— Tim ABI Foundation</span>
  </div>
</section>
<style>
  .perspective {
    perspective: 1000px;
  }
  .preserve-3d {
    transform-style: preserve-3d;
  }
  .rotate-y-180 {
    transform: rotateY(180deg);
  }
  .backface-hidden {
    backface-visibility: hidden;
  }
</style>


<style>
  .perspective {
    perspective: 1000px;
  }
  .preserve-3d {
    transform-style: preserve-3d;
  }
  .rotate-y-180 {
    transform: rotateY(180deg);
  }
  .backface-hidden {
    backface-visibility: hidden;
  }
</style>






 <!-- Footer -->
<?php 
    include '../footer.php';
?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="tentang-kami.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
     AOS.init({
        duration: 1000, // default durasi animasi
        once: true      // hanya animasi sekali
      });
  </script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


