<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Kategori | StockWise</title>

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

        .table thead {
            background-color: #173b57;
            color: white;
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

    <h2 class="judul">Kategori: <?php echo e($kategori); ?></h2>

    <p class="text-secondary">
        Daftar barang berdasarkan kategori yang dipilih.
    </p>

    <div class="card shadow-sm p-3">

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Stok Awal</th>
                        <th>Barang Masuk</th>
                        <th>Barang Keluar</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item['nama']); ?></td>
                            <td><?php echo e($item['stok_awal']); ?></td>
                            <td><?php echo e($item['barang_masuk']); ?></td>
                            <td><?php echo e($item['barang_keluar']); ?></td>
                            <td>
                                <a href="/barang/<?php echo e($item['id']); ?>"
                                   class="btn btn-sm btn-primary">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">
                                Tidak ada barang dalam kategori ini.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>

        <a href="/barang" class="btn btn-outline-primary mt-2">
            Kembali ke Semua Barang
        </a>

    </div>

</div>

</body>
</html>
<?php /**PATH C:\laragon\www\stockwise\resources\views/barang/kategori.blade.php ENDPATH**/ ?>