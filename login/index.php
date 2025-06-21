<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="../main.css?v=2.0" />
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
<body class="bg-sky-50">
<?php 
  session_start();
  include '../navbar.php';
?>

  <div class="mx-auto flex justify-center align-center flex-column w-full bg-neutral-50 max-w-sm flex-col gap-6 p-5 shadow-xl" style="margin-top: 200px; margin-bottom: 100px">
	<div class="flex flex-col items-center">
		<h1 class="text-3xl font-semibold text-blue-800 font-bold">ABI Foundation</h1>
		<p class="text-sm text-blue-500">Masukkan akun admin keredensial anda</p>
	</div>
  <form action="proses-login.php" method="post">
    <div class="form-group">
		<div class="form-field">
			<label class="form-label">Email address</label>
			<input placeholder="Type here" type="text" name="email" class="input max-w-full" />
			<label class="form-label">
				<span class="form-label-alt">Please enter a valid email.</span>
			</label>
		</div>
		<div class="form-field">
			<label class="form-label">Password</label>
			<div class="form-control">
				<input placeholder="Type here" type="password" name="password" class="input max-w-full" />
			</div>
		</div>
		<div class="form-field">
			<div class="form-control justify-between">
				<div class="flex gap-2">
					<input type="checkbox" class="checkbox" />
					<a href="#">Remember me</a>
				</div>
				<label class="form-label">
					<a class="link link-underline-hover link-primary text-sm">Forgot your password?</a>
				</label>
			</div>
		</div>
		<div class="form-field pt-5">
			<div class="form-control justify-between bg-blue-800">
				<button type="submit" name="login" class="btn btn-primary w-full ">Sign in</button>
			</div>
		</div>

		<div class="form-field">
			<div class="form-control justify-center">
				<a class="link link-underline-hover link-primary text-sm">Don't have an account yet? Sign up.</a>
			</div>
		</div>
	</div>
  </form>
	
</div>


 <footer class="site-footer bg-blue-800" data-aos="fade-up" data-aos-delay="200"> 
      <div class="border-footer">
        <div class="wrapper-footer">
          <div class="site-left">
            <div class="judul-footer">ABI Foundation</div>
            <p class="text-footer-left" data-translate="footer-text">Membangun masa depan lebih baik melalui pendidikan, inovasi, dan pemberdayaan.</p>
            <div class="sosial-media">
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-youtube"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="site-center">
            <div class="judul-footer-sejoli" data-translate="footer-contact-title">Hubungi Kami</div>
            <p class="location"><i class="bi bi-geo-alt"></i> Jl. Inspirasi No.123, Kota Harapan, Indonesia</p>
            <p class="call"><i class="bi bi-telephone"></i> +62 12 5676 765</p>
            <p class="email"><i class="bi bi-envelope"></i> info@abifoundation.com</p>
          </div>
          <div class="site-right">
            <div class="judul-footer-sejoli" data-translate="footer-links-title">Tautan Cepat</div>
            <a href="#" data-translate="footer-about">Tentang Kami</a>
            <a href="#" data-translate="footer-news">Berita Baru</a>
            <a href="#" data-translate="footer-gallery">Galeri Kegiatan</a>
            <a href="#" data-translate="footer-blog">Blog Kami</a>
            <a href="#" data-translate="footer-policy">Kebijakan Privasi</a>
            <a href="#" data-translate="footer-terms">Syarat &amp; ketentuan</a>
          </div>
        </div>
      </div>
      <div class="copy-right" data-translate="copyright">
        © 2025 ABI Foundation. Semua Hak Cipta Dilindungi.
      </div>
    </footer>


      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
     AOS.init({
        duration: 1000, // default durasi animasi
        once: true      // hanya animasi sekali
      });
  </script>
  <script src="../script.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>