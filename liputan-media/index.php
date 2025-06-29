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
    <link rel="stylesheet" href="liputan.css?v=3.0" />
    <link rel="stylesheet" href="../main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />


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

    <section class="header bg-[url('https://transparenttextures.com/patterns/cubes.png')] ">
        <div class="text">
          <i class="bi bi-newspaper" data-aos="fade-down" data-aos-delay="600"></i>
            <h1 data-aos="fade-up" data-aos-delay="600">Liputan Media</h1>
            <p data-aos="fade-up" data-aos-delay="600">Lihat bagaimana ABI Foundation diberitakan 
                oleh berbagai media massa.
            </p>
        </div>
    </section>

     <div class="wrapper-liputan mb-[5rem]">
      <div class="liputan">
        <!-- Card 1 -->
        <div class="card">
          <img src="../images/gambar_kreatif.jpg" alt="Gambar Berita">
          <div class="isi-card">
            <span>Pendidikan</span>
            <a href="#"><h2>ABI Foundation: Mengubah Kehidupan Melalui Pendidikan Inovatif</h2></a>
            <div class="tanggal">Dipublikasikan pada: 02 05 2025 <i class="bi bi-calendar-plus"></i></div>
            <div class="selengkapnya">
            <a href="#">Baca Selengkapnya <i class="bi bi-box-arrow-up-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
          <img src="../images/gambar_kreatif.jpg" alt="Gambar Berita">
          <div class="isi-card">
            <span>Keterampilan</span>
            <a href="#"><h2>Dampak Program Pemberdayaan Ekonomi 
            ABI Foundation Dirasakan Masyarakat</h2></a>
            <div class="tanggal">Dipublikasikan pada: 02 05 2025 <i class="bi bi-calendar-plus"></i></div>
            <div class="selengkapnya">
            <a href="#">Baca Selengkapnya <i class="bi bi-box-arrow-up-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
          <img src="../images/gambar_kreatif.jpg" alt="Gambar Berita">
          <div class="isi-card">
            <span>Ekonomi</span>
            <a href="#"><h2>Kolaborasi ABI Foundation dan Pemda Sukseskan Festival Budaya Lokal</h2></a>
            <div class="tanggal">Dipublikasikan pada: 02 05 2025 <i class="bi bi-calendar-plus"></i></div>
            <div class="selengkapnya">
            <a href="#">Baca Selengkapnya <i class="bi bi-box-arrow-up-right"></i></a>
            </div>
          </div>
        </div>

        <!-- Card 4 (otomatis pindah ke baris baru) -->
        <div class="card">
          <img src="../images/gambar_kreatif.jpg" alt="Gambar Berita">
          <div class="isi-card">
            <span>Penemuan</span>
            <a href="#"><h2>Liputan Khusus: Program Literasi Digital ABI Foundation Jangkau Pelosok Negeri</h2></a>
            <div class="tanggal">Dipublikasikan pada: 02 05 2025 <i class="bi bi-calendar-plus"></i></div>
            <div class="selengkapnya">
            <a href="#">Baca Selengkapnya <i class="bi bi-box-arrow-up-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      </div>

  <?php 
    include '../footer.php';
  ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="liputan-media.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
     AOS.init({
        duration: 1000, // default durasi animasi
        once: true      // hanya animasi sekali
      });
  </script>
 </body>
 </html>
 
 