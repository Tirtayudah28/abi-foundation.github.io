<?php
$base_url = "/ABI_Foundation/";
$is_logged_in = isset($_SESSION['login']) && $_SESSION['login'] === true;
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
  <link rel="stylesheet" href="<?= $base_url ?>main.css?v=2.0" />
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
<nav class="navbar flex justify-between items-center bg-[#f9fafc] p-[2rem] w-full shadow-xl fixed z-[1000]">
  <a href="index.php" class="navbar-logo">
    <img class="h-[6rem] w-[6rem] ml-[2rem]" src="<?= $base_url ?>assets/ABIFoundation.png" alt="logo">
  </a>
  <div class="navbar-right flex justify-end items-center gap-5 w-full">
    <div class="navbar-nav flex items-center gap-[0.5rem] relative ">
      <a href="<?= $base_url ?>index.php"><i class="bi bi-house-door"></i> Beranda</a>
      <a href="<?= $base_url ?>tentang-kami"><i class="bi bi-info-circle"></i> Tentang kami</a>
      <div class="dropdown-container">
        <button class="dropbtn" id="mediaToggle">
          <i class="bi bi-suitcase-lg"></i> Media <i class="bi bi-chevron-down small"></i>
        </button>
        <div class="menu-content" id="mediaMenu">
          <a href="<?= $base_url ?>berita"><i class="bi bi-newspaper"></i> Berita</a>
          <a href="<?= $base_url ?>liputan-media"><i class="bi bi-newspaper"></i> Liputan media</a>
          <a href="<?= $base_url ?>publikasi"><i class="bi bi-image"></i> Publikasi</a>
          <a href="#"><i class="bi bi-book"></i> Blog</a>
        </div>
      </div>
      <a href="<?= $base_url ?>hubungi-kami"><i class="bi bi-telephone"></i> Hubungi kami</a>

      <?php if ($is_logged_in): ?>
        <div class="dropdown-container flex align-center justify-center group">
            <button class="dropbtn-admin hover:bg-[#d2e6f7] text-center p-2 bg-transparent border-none text-[1rem] font-medium font-sans cursor-pointer gap-4 rounded-lg" id="adminToggle">
            <i class="bi bi-person-gear"></i> Admin <i class="bi bi-chevron-down small"></i>
            </button>
            <div class="menu-content-admin w-3xs group-hover:flex hidden absolute top-full bg-white rounded-xl p-3 shadow-lg flex flex-col" id="adminMenu">
            <div class="flex items-start justify-start flex-col">
                <a href="<?= $base_url ?>dashboard/index.php"><i class="bi bi-speedometer2"></i> Dashboard</a>
                <a href="<?= $base_url ?>berita/tambah-berita.php"><i class="bi bi-plus-circle"></i> Tambah Berita</a>
                <a href="<?= $base_url ?>publikasi/tambah-publikasi.php"><i class="bi bi-plus-circle"></i> Tambah Publikasi</a>
                <a href="<?= $base_url ?>dashboard/logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
            </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="navbar-extra">
      <div class="language-dropdown">
        <button class="dropdown-toggle" id="langButton">
          <img src="https://flagcdn.com/id.svg" class="flag-icon" id="current-flag" /> Bahasa
        </button>
        <div class="dropdown-menu" id="langMenu">
          <a href="#" class="language-option active" data-lang="id">
            <img src="https://flagcdn.com/id.svg" class="flag-icon" /> Bahasa Indonesia
          </a>
          <a href="#" class="language-option" data-lang="en">
            <img src="https://flagcdn.com/gb.svg" class="flag-icon" /> English
          </a>
        </div>
      </div>
      <div class="hamburger-wrapper">
        <i class="bi bi-list" id="hamburger-icon"></i>
        <i class="bi bi-x-lg" id="close-icon"></i>
      </div>
    </div>
  </div>
</nav>
<div class="navbar-spacer h-3"></div>

 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
