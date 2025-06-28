<?php if (isset($_GET['pesan']) && $_GET['pesan'] === 'belum_login') : ?>
  <div id="alertLogin" class="w-full bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 animate__animated animate__fadeInDown text-center" role="alert">
    <strong>Oops!</strong> Anda harus login terlebih dahulu.
  </div>
<?php endif; ?>

<?php 
  include '../config/koneksi.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin - ABI Foundation</title>

  <!-- Tailwind + Icons -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-sky-50 min-h-screen flex flex-col">

<?php include '../navbar.php'; ?>

<!-- Login Form -->
<div class="flex-grow flex items-center justify-center px-4 py-20 mt-[5rem]">
  <div class="w-full max-w-md bg-white shadow-xl rounded-xl p-8 space-y-6" data-aos="zoom-in" data-aos-delay="100">
    <div class="text-center">
      <h1 class="text-3xl font-bold text-blue-800 mb-1">ABI Foundation</h1>
      <p class="text-sm text-blue-600">Masukkan kredensial akun admin Anda</p>
    </div>

    <form action="proses-login.php" method="post" class="space-y-4">
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
        <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" placeholder="admin@email.com">
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
        <input type="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200" placeholder="••••••••">
      </div>

      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center gap-2">
          <input type="checkbox" class="form-checkbox border-gray-300 rounded text-blue-600">
          Ingat saya
        </label>
        <a href="#" class="text-blue-600 hover:underline">Lupa password?</a>
      </div>

      <button type="submit" name="login" class="w-full border border-blue-900 shadow-lg text-blue-700 font-bold hover:text-white py-2 rounded-md hover:bg-blue-900 transition">Masuk</button>
    </form>
  </div>
</div>

<!-- Footer -->
<?php 
  include '../footer.php';
?>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
<script>
  AOS.init({ duration: 1000, once: true });

  setTimeout(() => {
    const alertBox = document.getElementById('alertLogin');
    if (alertBox) {
      alertBox.style.transition = 'opacity 0.6s ease';
      alertBox.style.opacity = '0';
      setTimeout(() => alertBox.remove(), 600);
    }
  }, 4000);
</script>

</body>
</html>
