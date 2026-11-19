<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | StockWise</title>

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

        .kartu-utama {
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
            <a class="nav-link" href="/tentang">Tentang</a>
        </div>
    </div>
</nav>

<div class="container py-4">

    <div class="card kartu-utama p-4 mb-4 shadow-sm">
        <h2 class="fw-bold">Selamat Datang di StockWise</h2>
        <p class="mb-1">
            Kelola Stok, Tentukan Prioritas.
        </p>
        <p class="mb-0">
            Sistem analisis persediaan dan rekomendasi pengadaan barang
            untuk membantu pengelolaan stok secara lebih terarah.
        </p>
    </div>

    <h4 class="judul mb-3">Ringkasan Persediaan</h4>

    <div class="row g-3 mb-4">

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Total Barang</small>
                <h3>{{ $ringkasan['total_barang'] }}</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Stok Aman</small>
                <h3 class="text-success">{{ $ringkasan['stok_aman'] }}</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Stok Menipis</small>
                <h3 class="text-warning">{{ $ringkasan['stok_menipis'] }}</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Stok Habis</small>
                <h3 class="text-danger">{{ $ringkasan['stok_habis'] }}</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Total Stok Akhir</small>
                <h3>{{ $totalStok }}</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <small class="text-secondary">Total Kebutuhan Pengadaan</small>
                <h3>{{ $totalPengadaan }}</h3>
            </div>
        </div>

    </div>

    <h4 class="judul mb-3">Menu Utama</h4>

    <div class="row g-3">

        <div class="col-md-4">
            <div class="card shadow-sm p-3 h-100">
                <h5>Data Barang</h5>
                <p class="text-secondary">
                    Melihat seluruh data persediaan barang.
                </p>
                <a href="/barang" class="btn btn-primary mt-auto">
                    Lihat Data Barang
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3 h-100">
                <h5>Analisis Stok</h5>
                <p class="text-secondary">
                    Melihat kondisi stok dan hasil perhitungan.
                </p>
                <a href="/analisis" class="btn btn-primary mt-auto">
                    Lihat Analisis
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3 h-100">
                <h5>Rekomendasi Pengadaan</h5>
                <p class="text-secondary">
                    Melihat barang yang perlu ditambah stoknya.
                </p>
                <a href="/rekomendasi" class="btn btn-primary mt-auto">
                    Lihat Rekomendasi
                </a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
