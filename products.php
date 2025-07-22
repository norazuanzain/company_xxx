<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Produk | Nama Syarikat</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- Navbar -->
  <header class="bg-blue-800 text-white shadow">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">Nama Syarikat</h1>
      <nav class="space-x-6">
        <a href="index.html" class="hover:underline">Home</a>
        <a href="products.html" class="underline font-semibold">Products</a>
        <a href="#contact" class="hover:underline">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Product Page Title -->
  <section class="py-10 text-center">
    <h2 class="text-4xl font-bold mb-2">Senarai Produk Kami</h2>
    <p class="text-gray-600">Pilih dari pelbagai produk berkualiti tinggi</p>
  </section>

  <!-- Product Grid -->
  <section class="max-w-6xl mx-auto px-6 pb-20">
    <div class="grid gap-8 md:grid-cols-3">

      <!-- Product Card 1 -->
      <div class="bg-white shadow rounded-lg p-4 text-center">
        <img src="https://via.placeholder.com/200" alt="Produk 1" class="mx-auto mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 1</h3>
        <p class="text-gray-700 mb-2">RM 59.00</p>
        <a href="#" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-600">Lihat Produk</a>
      </div>

      <!-- Product Card 2 -->
      <div class="bg-white shadow rounded-lg p-4 text-center">
        <img src="https://via.placeholder.com/200" alt="Produk 2" class="mx-auto mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 2</h3>
        <p class="text-gray-700 mb-2">RM 79.00</p>
        <a href="#" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-600">Lihat Produk</a>
      </div>

      <!-- Product Card 3 -->
      <div class="bg-white shadow rounded-lg p-4 text-center">
        <img src="https://via.placeholder.com/200" alt="Produk 3" class="mx-auto mb-4 rounded">
        <h3 class="text-xl font-bold mb-2">Produk 3</h3>
        <p class="text-gray-700 mb-2">RM 99.00</p>
        <a href="#" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-600">Lihat Produk</a>
      </div>

      <!-- Tambah lebih banyak produk ikut keperluan -->

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-800 text-white py-6">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <p>&copy; 2025 Nama Syarikat. Semua Hak Terpelihara.</p>
    </div>
  </footer>

</body>
</html>
