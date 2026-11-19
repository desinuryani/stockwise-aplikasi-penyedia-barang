<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang | StockWise</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fb;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #173b57;
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        .judul {
            color: #173b57;
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 12px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">StockWise</a>

        <div class="navbar-nav">
            <a class="nav-link" href="/">Dashboard</a>
            <a class="nav-link" href="/barang">Data Barang</a>
            <a class="nav-link" href="/analisis">Analisis Stok</a>
            <a class="nav-link" href="/rekomendasi">Rekomendasi</a>
            <a class="nav-link" href="/tentang">Tentang</a>
        </div>
    </div>
</nav>

<div class="container py-4">

    <div class="card shadow-sm p-4">

        <h2 class="judul mb-3">Tentang StockWise</h2>

        <p>
            StockWise merupakan aplikasi berbasis web yang dibuat
            untuk membantu pengelolaan persediaan barang pada usaha
            kecil dan menengah (UMKM).
        </p>

        <p>
            Aplikasi ini dapat menghitung stok akhir berdasarkan stok awal,
            barang masuk, dan barang keluar. Selanjutnya, sistem menganalisis
            kondisi persediaan serta memberikan rekomendasi jumlah pengadaan
            berdasarkan stok target.
        </p>

        <h5 class="judul mt-3">Fitur Aplikasi</h5>

        <ul>
            <li>Menampilkan data persediaan barang.</li>
            <li>Melihat detail setiap barang.</li>
            <li>Memfilter barang berdasarkan kategori.</li>
            <li>Menghitung jumlah stok akhir.</li>
            <li>Mengelompokkan kondisi stok.</li>
            <li>Memberikan rekomendasi pengadaan.</li>
            <li>Menentukan prioritas pengadaan barang.</li>
        </ul>

        <h5 class="judul mt-3">Teknologi yang Digunakan</h5>

        <ul>
            <li>Laravel sebagai framework PHP.</li>
            <li>PHP untuk pengolahan data dan logika sistem.</li>
            <li>Blade untuk tampilan halaman.</li>
            <li>Bootstrap dan CSS untuk desain antarmuka.</li>
            <li>Array PHP sebagai penyimpanan data sementara tanpa database.</li>
        </ul>

        <h5 class="judul mt-3">Identitas Pengembang</h5>

        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>Desi Nuryani</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>C2483207006</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>PT15A</td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td>Pendidikan Teknologi Informasi</td>
            </tr>
        </table>

        <a href="/" class="btn btn-primary mt-2">
            Kembali ke Dashboard
        </a>

    </div>

</div>

</body>
</html>
<?php /**PATH C:\laragon\www\stockwise\resources\views/tentang.blade.php ENDPATH**/ ?>