<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="../main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"
    />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
</head>
<body class="">
<?php 
    $base_url = "/ABI_Foundation/";
    session_start();
    include '../navbar.php'; 

    include '../config/koneksi.php';
    $query = "SELECT * FROM berita ORDER BY created_at DESC";
    $result = mysqli_query($koneksi, $query);

    $berita = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $berita[] = $row;
    }
?>

<?php 
    $query2 = "SELECT * FROM publikasi ORDER BY created_at DESC";
    $result2 = mysqli_query($koneksi, $query2);

    $publikasi = [];
    while ($row = mysqli_fetch_assoc($result2)) {
        $publikasi[] = $row;
    }
?>

<div class="container-dashboard bg-none" style="margin-top: 10rem;">
    <div class="text-welcome m-8">
        <h1 class="text-blue-800 font-bold text-[3rem] max-sm:text-[2.562]">ABI Foundation</h1>
        <span class="text-slate-600 text-[1.2]">Selamat Datang, Admin</span>
    </div>
    <div class="wrapper-box m-8">
        <div class="box-total flex flex-row gap-x-8 max-sm:flex-col max-sm:gap-y-8">
            <div class="box-berita shadow-lg shadow-lg shadow-blue-200/50 flex flex-column justify-between p-8 max-sm:p-4 border border-neutral-50 rounded-xl w-80 max-sm:w-full">
                    <?php

                        // Ambil total berita dari database
                        $query = "SELECT COUNT(*) as total FROM berita";
                        $result = mysqli_query($koneksi, $query);
                        $data = mysqli_fetch_assoc($result);
                        $totalBerita = $data['total'];
                    ?>
                    <div class="site-left-box flex flex-col ">
                    <span class="text-[1rem] font-medium text-slate-500">TOTAL BERITA</span>
                    <span class="text-[1.563rem] font-bold"><?= $totalBerita ?></span>
                    <a href="../berita" class="mt-5 font-medium text-[0.9rem]">lihat detail</a>
                </div>
                <div class="site-right-box ">
                    <div class="logo">
                        <i class="bi bi-newspaper"></i>
                    </div>
                </div>
            </div>
            <div class="box-publikasi shadow-lg shadow-lg shadow-blue-200/50 flex flex-column justify-between p-8 max-sm:p-4 border border-neutral-50 rounded-xl w-80 max-sm:w-full">
                    <?php

                        // Ambil total publikasi dari database
                        $query = "SELECT COUNT(*) as total FROM publikasi";
                        $result = mysqli_query($koneksi, $query);
                        $data = mysqli_fetch_assoc($result);
                        $totalpublikasi = $data['total'];
                    ?>
                <div class="site-left-box flex flex-col ">
                    <span class="text-[1rem] font-medium text-slate-500">TOTAL ITEM GALERI</span>
                    <span class="text-[1.563rem] font-bold"><?= $totalpublikasi ?></span>
                    <a href="../publikasi" class="mt-5 font-medium text-[0.9rem]">lihat detail</a>
                </div>
                <div class="site-right-box ">
                    <div class="logo">
                        <i class="bi bi-image"></i>
                    </div>
                </div>
            </div>
            <div class="box-user shadow-lg shadow-lg shadow-blue-200/50 flex flex-column justify-between p-8 max-sm:p-4 border border-neutral-50 rounded-xl w-80 max-sm:w-full">
                    <?php

                        // Ambil total publikasi dari database
                        $query = "SELECT COUNT(*) as total FROM users";
                        $result = mysqli_query($koneksi, $query);
                        $data = mysqli_fetch_assoc($result);
                        $totalusers = $data['total'];
                    ?>
                <div class="site-left-box flex flex-col ">
                    <span class="text-[1rem] font-medium text-slate-500">PENGGUNA TERDAFTAR</span>
                    <span class="text-[1.563rem] font-bold"><?= $totalusers ?></span>
                    <a href="#" class="mt-5 font-medium text-[0.9rem]">lihat detail</a>
                </div>
                <div class="site-right-box ">
                    <div class="logo">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-input-media flex flex-row max-sm:flex-col gap-x-8 max-sm:gap-y-8 mt-8">
            
             <div class="input-berita p-8 shadow-lg shadow-blue-200/50 border border-neutral-100 rounded-xl w-1/2 max-sm:w-full"> <!-- max-w-4xl mx-auto -->
                <div class="site-top flex justify-between max-sm:flex-col">
                    <span class="text-[1.563rem] max-sm:text-[1.3rem] font-semibold">Kelola Berita/Blog</span>
                    <a href="<?= $base_url ?>berita/tambah-berita.php" class="bg-blue-600 hover:bg-blue-800 p-2 rounded-xl text-white text-center mt-2 max-sm:w-full">
                        <i class="bi bi-plus-circle"></i> Tambah Berita
                    </a>
                </div>

                <div class="site-bottom mt-8 space-y-4" id="list-berita">
                    <?php foreach ($berita as $index => $b): ?>
                        <div class="berita-item flex justify-between items-center p-4 border rounded-md <?= $index > 2 ? 'hidden extra-berita' : '' ?>">
                            <span class="font-medium text-blue-900 width-[50%] truncate"><?= htmlspecialchars($b['judul']) ?></span>
                            <div class="flex gap-2">
                                <a href="../berita/edit-berita.php?id=<?= $b['id'] ?>" class="text-blue-600 hover:underline text-base"><i class="bi bi-pencil-square text-lg"></i></a>
                                <a href="../berita/hapus-berita.php?id=<?= $b['id'] ?>" onclick="return confirm('Hapus berita ini?')" class="text-red-600 hover:underline text-base"><i class="bi bi-trash3 text-lg"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php if (count($berita) > 3): ?>
                    <div class="text-center mt-4">
                        <button id="toggle-berita" class="text-blue-600 font-semibold hover:underline">Lebih banyak lagi</button>
                    </div>
                <?php endif; ?>
            </div>

            <div class="input-publikasi p-8 shadow-lg shadow-blue-200/50 border border-neutral-100 rounded-xl w-1/2 max-sm:w-full">
                <div class="site-top flex justify-between max-sm:flex-col mt-[0.5rem]">
                    <span class="text-[1.563rem] max-sm:text-[1.3rem] font-semibold">Kelola Galeri</span>
                    <a href="<?= $base_url ?>publikasi/tambah-publikasi.php" class="w-60  max-sm:w-full max-sm:mt-4 bg-green-600 hover:bg-green-800 focus:outline-2 focus:outline-offset-2 focus:outline-green-500 active:bg-green-800 p-2 rounded-xl text-center">
                        <button class="text-neutral-50 font-medium">
                            <i class="bi bi-plus-circle"></i> Tambahkan Publikasi</button>
                        </a>
                </div>

                 <div class="site-bottom mt-8 space-y-4" id="list-publikasi">
                    <?php foreach ($publikasi as $index => $c): ?>
                        <div class="berita-item flex justify-between items-center p-4 border rounded-md <?= $index > 2 ? 'hidden extra-publikasi' : '' ?>">
                            <span class="font-medium text-blue-900 width-[50%] truncate"><?= htmlspecialchars($c['judul_gambar']) ?></span>
                            <div class="flex gap-2">
                                <a href="../publikasi/edit-publikasi.php?id=<?= $c['id'] ?>" class="text-blue-600 hover:underline text-base"><i class="bi bi-pencil-square text-lg"></i></a>
                                <a href="../publikasi/hapus-publikasi.php?id=<?= $c['id'] ?>" onclick="return confirm('Hapus gambar ini?')" class="text-red-600 hover:underline text-base"><i class="bi bi-trash3 text-lg"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php if (count($publikasi) > 3): ?>
                    <div class="text-center mt-4">
                        <button id="toggle-publikasi" class="text-blue-600 font-semibold hover:underline">Lebih banyak lagi</button>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="box-setting mt-8 w-full p-8 shadow-lg shadow-blue-200/50 border border-neutral-100 rounded-xl" style="margin-bottom: 100px;">
            <div class="site-top">
                <span class="text-[1.563rem] max-sm:text-[1.3rem] font-semibold">Pengaturan & Lainnya</span>
            </div>
            <div class="site-bottom mt-5">
                    <a href="#" class="border border-slate-300 p-2 px-3 hover:text-blue-300 hover:bg-slate-100 focus:outline-2 focus:outline-offset-2 focus:outline-slate-300 active:bg-slate-200  font-medium rounded-xl max-sm:text-[0.7rem]"><i class="bi bi-gear"></i> Pengaturan Website</a>
                    <a href="#" class="border border-slate-300 p-2 px-3 hover:text-blue-300 hover:bg-slate-100 focus:outline-2 focus:outline-offset-2 focus:outline-slate-300 active:bg-slate-200 font-medium rounded-xl mx-2 max-sm:text-[0.7rem]"><i class="bi bi-people"></i> Kelola Pengguna</a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 
    include '../footer.php';
?>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
     AOS.init({
        duration: 1000, // default durasi animasi
        once: true      // hanya animasi sekali
      });

    //   berita
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("toggle-berita");
        const items = document.querySelectorAll(".extra-berita");
        let expanded = false;

        if (btn) {
            btn.addEventListener("click", function () {
                items.forEach(item => item.classList.toggle("hidden"));
                expanded = !expanded;
                btn.textContent = expanded ? "Tutup" : "Lebih banyak lagi";
            });
        }
    });

    // publikasi
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("toggle-publikasi");
        const items = document.querySelectorAll(".extra-publikasi");
        let expanded = false;

        if (btn) {
            btn.addEventListener("click", function () {
                items.forEach(item => item.classList.toggle("hidden"));
                expanded = !expanded;
                btn.textContent = expanded ? "Tutup" : "Lebih banyak lagi";
            });
        }
    });
  </script>
  <script src="../script.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>