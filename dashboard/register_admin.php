<?php
session_start();
include '../config/koneksi.php';

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Pengguna</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet" />
</head>
<body class="bg-sky-50">
<?php include '../navbar.php';?>
<div class="max-w-xl mx-auto mt-[10rem] mb-16 bg-white p-8 shadow-lg rounded-xl border border-blue-100 relative">
  
  <!-- Tombol kembali -->
  <div class="absolute top-4 right-4">
    <a href="../dashboard/" class="text-sm text-blue-600 hover:underline flex items-center">
      <i class="bi bi-arrow-left mr-1"></i> Kembali ke Dashboard
    </a>
  </div>

  <h1 class="text-2xl font-bold text-blue-800 py-4 mb-6 text-center">Form Registrasi Pengguna</h1>
  
  <form action="proses_register.php" method="POST" class="space-y-4">
    
    <div>
      <label for="nama" class="block text-sm font-semibold text-gray-700">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" required class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-200">
    </div>

    <div>
      <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
      <input type="email" id="email" name="email" required class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-200">
    </div>

    <div>
      <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
      <input type="password" id="password" name="password" required class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-200">
    </div>

    <div>
      <label for="role" class="block text-sm font-semibold text-gray-700">Role</label>
      <select id="role" name="role" required class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-200">
        <option value="">-- Pilih Role --</option>
        <option value="admin">Admin</option>
        <option value="editor">Editor</option>
      </select>
    </div>

    <div class="text-end pt-4">
      <button type="submit" class="border hover:bg-blue-900 text-blue-900 hover:text-white font-bold px-6 py-2 rounded-md shadow-md transition">Daftar</button>
    </div>

  </form>
</div>

<?php include '../footer.php'; ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // default durasi animasi
        once: true      // hanya animasi sekali
      });
</script>
</body>
</html>

