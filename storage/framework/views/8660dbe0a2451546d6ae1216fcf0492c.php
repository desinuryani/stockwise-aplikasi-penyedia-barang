<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Stok | StockWise</title>

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

        .card {
            border: none;
            border-radius: 12px;
        }

        .judul {
            color: #173b57;
            font-weight: bold;
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

    <h2 class="judul mb-2">Analisis Persediaan Barang</h2>
    <p class="text-secondary">
        Hasil perhitungan kondisi stok berdasarkan data persediaan.
    </p>

    <div class="row g-3 mb-4">

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Total Barang</small>
                <h3><?php echo e($ringkasan['total_barang']); ?></h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Stok Aman</small>
                <h3 class="text-success"><?php echo e($ringkasan['stok_aman']); ?></h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Stok Menipis</small>
                <h3 class="text-warning"><?php echo e($ringkasan['stok_menipis']); ?></h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Stok Habis</small>
                <h3 class="text-danger"><?php echo e($ringkasan['stok_habis']); ?></h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Data Tidak Valid</small>
                <h3><?php echo e($ringkasan['data_tidak_valid']); ?></h3>
            </div>
        </div>

    </div>

    <div class="card shadow-sm p-3">
        <h5 class="judul mb-3">Hasil Analisis Setiap Barang</h5>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Stok Akhir</th>
                        <th>Status</th>
                        <th>Kebutuhan Pengadaan</th>
                        <th>Prioritas</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $dataBarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item['nama']); ?></td>
                            <td><?php echo e($item['stok_akhir']); ?></td>
                            <td><?php echo e($item['status']); ?></td>
                            <td><?php echo e($item['kebutuhan']); ?></td>
                            <td><?php echo e($item['prioritas']); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
<?php /**PATH C:\laragon\www\stockwise\resources\views/analisis/index.blade.php ENDPATH**/ ?>