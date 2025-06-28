<?php
include 'config/koneksi.php';
// $base_url = "/ABI_Foundation/";
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
  <link rel="stylesheet" href="<?= $base_url ?>main.css?v=4.2" />
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
        </div>
      </div>
      <a href="<?= $base_url ?>hubungi-kami"><i class="bi bi-telephone"></i> Hubungi kami</a>

      <?php if ($is_logged_in): ?>
        <div class="dropdown-container relative desktop-only hidden md:inline-block text-left">
            <button type="button" class="border-noneinline-flex w-full justify-center gap-x-1.5 rounded-md bg-none px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs hover:bg-[#85b2f7] hover:text-white" id="adminToggle" aria-expanded="true" aria-haspopup="true"> <!-- divide-y divide-x divide-red-600 ring-2 ring-blue/10 ring-1 ring-gray-300 ring-inset -->
              <i class="bi bi-person-gear"></i> Admin
              <!-- <svg class="-mr-1 size-5 text-gray-400 hover:text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
              </svg> -->
            </button>
          <div id="adminMenu" class="hidden text-left absolute right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-blue-600 rounded-md bg-white shadow-lg border-2 border-blue-500 focus:outline-hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1" role="none">
              <!-- Active: "bg-gray-100 text-gray-900 outline-hidden", Not Active: "text-gray-700" -->
              <a href="<?= $base_url ?>dashboard/index.php" class="block px-4 py-2 flex flex-start text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-0"> <i class="bi bi-speedometer2 pr-2"></i> Dashboard</a>
              <a href="<?= $base_url ?>berita/tambah-berita.php" class="block px-4 py-2 flex flex-start text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1"> <i class="bi bi-plus-circle pr-2"></i> Tambah Berita</a>
              <a href="<?= $base_url ?>publikasi/tambah-publikasi.php" class="block px-4 py-2 flex flex-start text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1"> <i class="bi bi-plus-circle pr-2"></i> Tambah Publikasi</a>
            </div>
            <div class="py-1" role="none" id="logout">
              <a href="<?= $base_url ?>dashboard/logout.php" class="block px-4 py-2 flex flex-start text-sm text-red-600" role="menuitem" tabindex="-1" id="menu-item-6"> <i class="bi bi-box-arrow-right pr-2"></i> Logout</a>
            </div>
          </div>
        </div>
        <?php endif; ?>

         <!-- VERSI MOBILE LINK LANGSUNG -->
        <?php if ($is_logged_in): ?>
          <div class="flex flex-col mobile-only gap-2 md:hidden">
            <a href="<?= $base_url ?>dashboard/index.php"><i class="bi bi-speedometer2"></i> Dashboard</a>
            <a href="<?= $base_url ?>berita/tambah-berita.php"><i class="bi bi-plus-circle"></i> Tambah Berita</a>
            <a href="<?= $base_url ?>publikasi/tambah-publikasi.php"><i class="bi bi-plus-circle"></i> Tambah Publikasi</a>
          </div>
        <?php endif; ?>

      </div>

      <!-- <div class="dropdown-container flex align-center justify-center group">
          <button class="dropbtn-admin hover:bg-[#d2e6f7] text-center p-2 bg-transparent border-none text-[1rem] font-medium font-sans gap-4 rounded-lg" id="adminToggle">
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
      </div> -->
    <div class="navbar-extra flex items-center gap-4 absolute top-4 right-4 md:static md:top-auto md:right-auto">
      <!-- Logout hanya tampil di MOBILE -->
      <?php if ($is_logged_in): ?>
        <a href="<?= $base_url ?>dashboard/logout.php" id="logout" class="text-red-600 hover:text-red-800 text-xl md:hidden">
          <i class="bi bi-box-arrow-right"></i>
        </a>
      <?php endif; ?>
      <!-- Bahasa -->
      <div class="language-dropdown">
        <button class="dropdown-toggle" id="langButton">
          <img src="https://flagcdn.com/id.svg" class="flag-icon" id="current-flag" /> 
        </button>
        <div class="dropdown-menu" id="langMenu">
          <a href="#" class="language-option active" data-lang="id"><img src="https://flagcdn.com/id.svg" class="flag-icon" /> Bahasa Indonesia</a>
          <a href="#" class="language-option" data-lang="en"><img src="https://flagcdn.com/gb.svg" class="flag-icon" /> English</a>
        </div>
      </div>
      <!-- Hamburger -->
      <div class="hamburger-wrapper text-2xl">
        <i class="bi bi-list" id="hamburger-icon"></i>
        <i class="bi bi-x-lg" id="close-icon" style="display: none;"></i>
      </div>
    </div>

  </div>
</nav>
<div class="navbar-spacer h-3"></div>

 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

     const menuButton = document.getElementById('adminToggle');
      const dropdownMenu = document.getElementById('adminMenu');

      // Hanya aktif jika lebar layar >= 768px
      if (window.innerWidth >= 768 && menuButton) {
        menuButton.addEventListener('click', () => {
          dropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(e) {
          if (!menuButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
          }
        });
      }

  </script>
  <script src="script.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
