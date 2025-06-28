 <?php 
    session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="style.css?v=2.0" />
    <link rel="stylesheet" href="../main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
 </head>
 <body>

     <!-- section navbar -->
     <?php
      include '../navbar.php';
    ?>

    <section class="header bg-[url('https://transparenttextures.com/patterns/cubes.png')] ">
        <div class="text">
          <i class="bi bi-telephone" data-aos="fade-down" data-aos-delay="600"></i>
            <h1 data-aos="fade-up" data-aos-delay="600">Hubungi Kami</h1>
            <p data-aos="fade-up" data-aos-delay="600">Kami senang mendengar dari Anda! Baik itu pertanyaan, saran,
                atau peluang kolaborasi.
            </p>
        </div>
    </section>

   <section class="pesan-kontak py-12 px-4 sm:px-8 lg:px-16 font-poppins">
  <div class="wrapper-callme max-w-6xl mx-auto flex flex-col lg:flex-row gap-10">
    
    <!-- Form Kirim Pesan -->
    <div class="form-pesan w-full lg:w-1/2" data-aos="fade-right" data-aos-delay="600">
      <div class="content-pesan bg-white p-6 sm:p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-blue-800 mb-6">Kirim Pesan</h2>
        <form class="pesan space-y-4" action="" method="post">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="nama">Nama Lengkap</label>
            <input type="text" placeholder="Nama Lengkap" id="nama"
              class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="email">Alamat Email</label>
            <input type="email" placeholder="email@your.com" id="email"
              class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="subjek">Subjek (Opsional)</label>
            <input type="text" placeholder="Subjek pesan Anda" id="subjek"
              class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" for="pesan">Pesan Anda</label>
            <textarea placeholder="Tulis pesan Anda di sini..." id="pesan"
              class="w-full px-4 py-2 border border-gray-300 rounded-md h-32 resize-none focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
          </div>
          <div>
            <button type="submit"
              class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md font-medium transition duration-200">
              Kirim Pesan <i class="bi bi-send ml-2"></i>
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Info Kontak -->
    <div class="info-kontak w-full lg:w-1/2 sm:flex sm:justify-center">
      <div class="content-kontak p-6 sm:p-8 rounded-lg">
        <h2 class="text-2xl font-semibold text-blue-800 mb-6" data-aos="zoom" data-aos-delay="600">Informasi Kontak</h2>
        
        <div class="space-y-5 text-left ">
          <div class="field" data-aos="fade-up" data-aos-delay="200">
            <div class="alamat">
              <span class="text-blue-700 font-medium flex items-center gap-2"><i class="bi bi-geo-alt"></i> Alamat Kantor</span>
              <p class="text-sm text-gray-700">Jl. Inspirasi No. 123, Kota Harapan, Indonesia 12345</p>
            </div>
          </div>
          <div class="field" data-aos="fade-up" data-aos-delay="300">
            <div class="telepon">
              <span class="text-blue-700 font-medium flex items-center gap-2"><i class="bi bi-telephone"></i> Telepon</span>
              <p class="text-sm text-gray-700">+62 812 5676 765</p>
            </div>
          </div>
          <div class="field" data-aos="fade-up" data-aos-delay="400">
            <div class="email">
              <span class="text-blue-700 font-medium flex items-center gap-2"><i class="bi bi-envelope"></i> Email</span>
              <p class="text-sm text-gray-700">info@abifoundation.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


    <section class="wrapper-peta py-12 px-4 sm:px-8 lg:px-0">
    <div class="max-w-5xl mx-auto bg-blue-100 rounded-xl shadow-md px-6 sm:px-12 py-10 text-center">
        <h2 class="text-2xl sm:text-3xl font-semibold text-blue-800 mb-3 leading-snug tracking-wide" data-aos="zoom" data-aos-delay="600">
        Temukan Lokasi Kami
        </h2>

        <p class="text-blue-700 text-base sm:text-lg font-normal mb-6 leading-relaxed" data-aos="fade-up" data-aos-delay="650">
        Jl. Sei Selayang, No. 27, Medan – Sumatera Utara, Indonesia
        </p>

        <div id="mapid"
            class="lokasi rounded-lg overflow-hidden shadow-lg w-full h-[280px] sm:h-[360px] lg:h-[450px] border-4 border-blue-400"
            data-aos="fade-up" data-aos-delay="700">
        <!-- Peta interaktif akan tampil di sini -->
        </div>
    </div>
    </section>


   

  <?php 
    include '../footer.php';
  ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="hubungi-kami.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // default durasi animasi
            once: true      // hanya animasi sekali
        });
    </script>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
    
     // Koordinat perkiraan Jl. Sei Selayang, No. 27, Medan
  const map = L.map('mapid').setView([3.5532838, 98.6292586], 16);

  // Tambahkan tile OpenStreetMap
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
  }).addTo(map);

  // Tambahkan marker dan popup
  L.marker([3.5532838, 98.6292586]).addTo(map)
    .bindPopup('<strong>ABI Foundation</strong><br>Jl. Sei Selayang, No. 27, Medan')
    .openPopup();

    </script>

 </body>
 </html>
 
 