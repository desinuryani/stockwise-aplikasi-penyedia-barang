<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Pengadaan | StockWise</title>

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

    <h2 class="judul mb-2">Rekomendasi Pengadaan Barang</h2>

    <p class="text-secondary">
        Daftar barang yang membutuhkan tambahan stok berdasarkan jumlah stok target.
    </p>

    <div class="card shadow-sm p-3">

        <h5 class="judul mb-3">Daftar Prioritas Pengadaan</h5>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Stok Akhir</th>
                        <th>Stok Target</th>
                        <th>Jumlah Pengadaan</th>
                        <th>Prioritas</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $dataBarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item['nama']); ?></td>
                            <td><?php echo e($item['kategori']); ?></td>
                            <td><?php echo e($item['stok_akhir']); ?></td>
                            <td><?php echo e($item['stok_target']); ?></td>
                            <td><?php echo e($item['kebutuhan']); ?></td>
                            <td>
                                <?php if($item['prioritas'] == 'Tinggi'): ?>
                                    <span class="badge bg-danger">Tinggi</span>
                                <?php elseif($item['prioritas'] == 'Sedang'): ?>
                                    <span class="badge bg-warning text-dark">Sedang</span>
                                <?php else: ?>
                                    <span class="badge bg-success">Rendah</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="text-center">
                                Tidak ada barang yang membutuhkan pengadaan.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>

        <a href="/analisis" class="btn btn-outline-primary mt-2">
            Kembali ke Analisis
        </a>

    </div>

</div>

</body>
</html>
<?php /**PATH C:\laragon\www\stockwise\resources\views/analisis/rekomendasi.blade.php ENDPATH**/ ?>