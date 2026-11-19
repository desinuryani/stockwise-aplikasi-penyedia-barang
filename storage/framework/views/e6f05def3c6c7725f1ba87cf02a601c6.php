<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang | StockWise</title>

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
        </div>
    </div>
</nav>

<div class="container py-4">

    <h2 class="judul mb-3">Detail Barang</h2>

    <div class="card shadow-sm p-4">

        <h4 class="mb-3"><?php echo e($detail['nama']); ?></h4>

        <table class="table table-bordered">
            <tr>
                <th>Kategori</th>
                <td><?php echo e($detail['kategori']); ?></td>
            </tr>
            <tr>
                <th>Stok Awal</th>
                <td><?php echo e($detail['stok_awal']); ?></td>
            </tr>
            <tr>
                <th>Barang Masuk</th>
                <td><?php echo e($detail['barang_masuk']); ?></td>
            </tr>
            <tr>
                <th>Barang Keluar</th>
                <td><?php echo e($detail['barang_keluar']); ?></td>
            </tr>
            <tr>
                <th>Stok Target</th>
                <td><?php echo e($detail['stok_target']); ?></td>
            </tr>
        </table>

        <a href="/barang" class="btn btn-outline-primary mt-2">
            Kembali ke Data Barang
        </a>

    </div>

</div>

</body>
</html>
<?php /**PATH C:\laragon\www\stockwise\resources\views/barang/detail.blade.php ENDPATH**/ ?>