<?php
include '../config/koneksi.php';

$keyword = $_GET['q'] ?? '';
$kategori = $_GET['kategori'] ?? '';

$keyword = mysqli_real_escape_string($koneksi, $keyword);
$kategori = mysqli_real_escape_string($koneksi, $kategori);

$query = "SELECT * FROM berita WHERE 1";

if (!empty($keyword)) {
  $query .= " AND judul LIKE '%$keyword%'";
}

if (!empty($kategori)) {
  $query .= " AND kategori = '$kategori'";
}

$query .= " ORDER BY tanggal DESC";

$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) === 0) {
  echo "<p style='padding: 2rem; color: gray;'>Tidak ada berita ditemukan.</p>";
}

while ($row = mysqli_fetch_assoc($result)) {
  $judul     = htmlspecialchars($row['judul']);
  $kategori  = htmlspecialchars($row['kategori']);
  $excerpt   = htmlspecialchars($row['excerpt']);
  $tanggal   = date('d m Y', strtotime($row['tanggal']));
  $gambar    = htmlspecialchars($row['gambar']);
  $id        = $row['id'];

  echo '
    <div class="card">
      <img src="../images/berita/' . $gambar . '" alt="Gambar Berita">
      <div class="isi-card">
        <span>' . $kategori . '</span>
        <a href="detail-berita.php?id=' . $id . '"><h2>' . $judul . '</h2></a>
        <p>' . $excerpt . '</p>
        <div class="tanggal"><i class="bi bi-calendar-plus"></i> ' . $tanggal . '</div>
        <a href="detail-berita.php?id=' . $id . '">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>';
}
?>
