<?php 
  session_start();
  include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="berita.css?v=2.0" />
  <link rel="stylesheet" href="../main.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://unpkg.com/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"
    />
</head>
<body>
<?php include '../navbar.php'; ?>
<section class="header">
  <div class="text">
    <i class="bi bi-newspaper" data-aos="fade-down" data-aos-delay="600"></i>
    <h1 data-aos="fade-up" data-aos-delay="600">Berita ABI Foundation</h1>
    <p data-aos="fade-up" data-aos-delay="600">Ikuti perkembangan terbaru mengenai program, kegiatan, dan dampak positif yang kami ciptakan</p>
  </div>
</section>

<section class="news">
  <div class="wrapper-berita ">
    <form method="get" class="search-box flex justify-between w-full" data-aos="fade-right" data-aos-delay="600">
      <div class="input-wrapper">
        <i class="bi bi-search"></i>
        <input type="text" id="searchInput" name="search" placeholder="Cari Berita" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
      </div>
      <div class="All" data-aos="fade-left" data-aos-delay="600">
        <i class="bi bi-funnel"></i>
        <select name="kategori" id="kategoriSelect" onchange="this.form.submit()" class="select-box">
          <option value="">Semua</option>
          <?php
            $kategori_query = mysqli_query($koneksi, "SELECT DISTINCT kategori FROM berita");
            while ($row = mysqli_fetch_assoc($kategori_query)) {
              $selected = ($_GET['kategori'] ?? '') == $row['kategori'] ? 'selected' : '';
              echo "<option value=\"{$row['kategori']}\" $selected>{$row['kategori']}</option>";
            }
          ?>
        </select>
      </div>
    </form>
  </div>

  <div class="wrapper-news">
    <div class="news" id="hasilBerita">
      <?php
        $search = $_GET['search'] ?? '';
        $kategori = $_GET['kategori'] ?? '';

        $query = "SELECT * FROM berita WHERE 1";
        if (!empty($search)) {
          $search = mysqli_real_escape_string($koneksi, $search);
          $query .= " AND judul LIKE '%$search%'";
        }
        if (!empty($kategori)) {
          $kategori = mysqli_real_escape_string($koneksi, $kategori);
          $query .= " AND kategori = '$kategori'";
        }
        $query .= " ORDER BY tanggal DESC";

        $result = mysqli_query($koneksi, $query);
        if (mysqli_num_rows($result) === 0) {
          echo "<p style='padding: 2rem; color: gray;'>Tidak ada berita ditemukan.</p>";
        }
        while ($row = mysqli_fetch_assoc($result)) {
          $judul     = $row['judul'];
          $kategori  = $row['kategori'];
          $excerpt   = $row['excerpt'];
          $tanggal   = date('d m Y', strtotime($row['tanggal']));
          $gambar    = $row['gambar'];
          $id        = $row['id'];
      ?>
      <div class="card">
        <img src="../images/berita/<?= $gambar ?>" alt="Gambar Berita">
        <div class="isi-card">
          <span><?= htmlspecialchars($kategori) ?></span>
          <a href="detail-berita.php?id=<?= $id ?>"><h2><?= htmlspecialchars($judul) ?></h2></a>
          <p><?= htmlspecialchars($excerpt) ?></p>
          <div class="tanggal"><i class="bi bi-calendar-plus"></i> <?= $tanggal ?></div>
          <a href="detail-berita.php?id=<?= $id ?>">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<footer class="site-footer" data-aos="fade-up" data-aos-delay="200" style="margin-top: 5rem;">
  <div class="border-footer">
    <div class="wrapper-footer">
      <div class="site-left">
        <div class="judul-footer">ABI Foundation </div>
        <p class="text-footer-left">Membangun masa depan yag lebih baik melalui pendidikan, inovasi, dan pemberdayaan masyarakat.</p>
        <div class="sosial-media">
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-youtube"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <div class="site-center">
        <div class="judul-footer-sejoli">Hubungi Kami</div>
        <p class="location"><i class="bi bi-geo-alt"></i> Jl.Inspirasi No.123, Kota Harapan, Indonesia</p>
        <p class="call"><i class="bi bi-telephone"></i> +62 12 5676 765</p>
        <p class="email"><i class="bi bi-envelope"></i> info@abifoundation.com</p>
      </div>
      <div class="site-right">
        <div class="judul-footer-sejoli">Tautan Cepat</div>
        <a href="#">Tentang Kami</a>
        <a href="#">Berita Baru</a>
        <a href="#">Galeri Kegiatan</a>
        <a href="#">Blog Kami</a>
        <a href="#">Kebijakan Privasi</a>
        <a href="#">Syarat &amp; ketentuan</a>
      </div>
    </div>
  </div>
  <div class="copy-right">
    © 2025 ABI Foundation. Semua Hak Cipta Dilindungi.
  </div>    
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="berita.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
  AOS.init({ duration: 1000, once: true });

  const searchInput = document.getElementById('searchInput');
  const kategoriSelect = document.getElementById('kategoriSelect');
  const hasilBerita = document.getElementById('hasilBerita');

  function loadBerita() {
    const keyword = searchInput.value;
    const kategori = kategoriSelect.value;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'cari-berita.php?q=' + encodeURIComponent(keyword) + '&kategori=' + encodeURIComponent(kategori), true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        hasilBerita.innerHTML = xhr.responseText;
      }
    };
    xhr.send();
  }

  searchInput.addEventListener('input', loadBerita);
  kategoriSelect.addEventListener('change', loadBerita);



</script>
</body>
</html>
