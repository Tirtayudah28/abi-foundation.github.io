<?php
session_start();
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Berita ABI Foundation</title>
  <link rel="stylesheet" href="berita.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-white text-gray-800 overflow-y-hidden">

<?php include '../navbar.php'; ?>

<!-- Hero -->
<section class="header w-full relative bg-[linear-gradient(to_right,rgba(240,248,255,0.6),white)] bg-[url('https://transparenttextures.com/patterns/cubes.png')] py-24 px-4 text-center">
  <div class="text z-10 relative">
    <i class="bi bi-newspaper text-4xl text-blue-600 mb-4 block" data-aos="fade-down" data-aos-delay="600"></i>
    <h1 class="text-4xl font-extrabold text-blue-900 mb-2" data-aos="fade-up" data-aos-delay="600">Berita ABI Foundation</h1>
    <p class="text-lg text-blue-800 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="600">
      Ikuti perkembangan terbaru mengenai program, kegiatan, dan dampak positif yang kami ciptakan.
    </p>
  </div>
</section>

<!-- Search + Filter -->
<section class="max-w-7xl mx-auto px-4 my-[5rem] mt-10">
  <div class="flex flex-col md:flex-row justify-between gap-4 mb-6">
    <div class="relative w-full md:w-1/2">
      <input id="searchInput" type="text" placeholder="Cari Berita" class="w-full border border-gray-300 rounded-md px-10 py-3 focus:ring-blue-500 focus:border-blue-500" />
      <i class="bi bi-search absolute left-3 top-3.5 text-gray-400"></i>
    </div>
    <div class="relative w-full md:w-1/4">
      <select id="kategoriSelect" class="w-full border border-gray-300 rounded-md px-4 py-3 appearance-none focus:ring-blue-500 focus:border-blue-500">
        <option value="">Semua Kategori</option>
        <?php
        $kategori_query = mysqli_query($koneksi, "SELECT DISTINCT kategori FROM berita");
        while ($row = mysqli_fetch_assoc($kategori_query)) {
          echo "<option value=\"{$row['kategori']}\">{$row['kategori']}</option>";
        }
        ?>
      </select>
      <i class="bi bi-filter absolute right-3 top-3.5 text-gray-400"></i>
    </div>
  </div>

  <!-- Loading Spinner -->
  <div id="loadingSpinner" class="hidden text-center py-6 transition-opacity duration-300 opacity-0">
    <i class="bi bi-arrow-repeat animate-spin text-3xl text-blue-500"></i>
  </div>

  <!-- Berita -->
  <div id="hasilBerita" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php
    $result = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY tanggal DESC");
    while ($row = mysqli_fetch_assoc($result)) {
      $judul = htmlspecialchars($row['judul']);
      $kategori = htmlspecialchars($row['kategori']);
      $excerpt = htmlspecialchars($row['excerpt']);
      $tanggal = date('d M Y', strtotime($row['tanggal']));
      $gambar = htmlspecialchars($row['gambar']);
      $id = $row['id'];
      echo '
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="../images/berita/' . $gambar . '" alt="' . $judul . '" class="w-full h-48 object-cover rounded-t-lg">
        <div class="p-5">
          <span class="inline-block text-sm bg-blue-100 text-blue-800 px-3 py-1 rounded-full mb-2">' . $kategori . '</span>
          <h2 class="font-bold text-lg text-gray-800 mb-2">' . $judul . '</h2>
          <p class="text-gray-600 text-sm mb-3">' . $excerpt . '</p>
          <div class="text-sm text-gray-500 mb-3"><i class="bi bi-calendar-event"></i> ' . $tanggal . '</div>
          <a href="detail-berita.php?id=' . $id . '" class="text-blue-600 font-semibold hover:underline">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>';
    }
    ?>
  </div>

  <!-- Tidak ditemukan -->
  <p id="notFound" class="hidden text-center text-gray-500 py-10">Tidak ada berita ditemukan.</p>
</section>


<?php 
  include '../footer.php';
?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="berita.js"></script>
<script>

  const searchInput = document.getElementById('searchInput');
  const kategoriSelect = document.getElementById('kategoriSelect');
  const hasilBerita = document.getElementById('hasilBerita');
  const loading = document.getElementById('loadingSpinner');
  const notFound = document.getElementById('notFound');

  let timer;

  function showLoading() {
    loading.classList.remove('hidden');
    setTimeout(() => loading.classList.add('opacity-100'), 10);
    hasilBerita.classList.add('opacity-50');
  }

  function hideLoading() {
    loading.classList.remove('opacity-100');
    setTimeout(() => loading.classList.add('hidden'), 300);
    hasilBerita.classList.remove('opacity-50');
  }

  function loadBerita() {
    clearTimeout(timer);
    showLoading();

    timer = setTimeout(() => {
      const keyword = searchInput.value;
      const kategori = kategoriSelect.value;

      fetch(`cari-berita.php?q=${encodeURIComponent(keyword)}&kategori=${encodeURIComponent(kategori)}`)
        .then(res => res.text())
        .then(html => {
          hasilBerita.innerHTML = html.trim();
          notFound.classList.toggle('hidden', hasilBerita.innerHTML.trim() !== '');
          hideLoading();
        });
    }, 300); // delay fetch untuk menghindari flicker
  }

  searchInput.addEventListener('input', loadBerita);
  kategoriSelect.addEventListener('change', loadBerita);


</script>
<script>
  AOS.init({
    once: true,
    duration: 800,
    mirror: false
  });
</script>

</body>
</html>
