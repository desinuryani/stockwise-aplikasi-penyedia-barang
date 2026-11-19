<?php
namespace App\Http\Controllers;

use App\Data\BarangData;

class DashboardController extends Controller
{
    public function index()
    {
        $barang = BarangData::semua();

        $analisis = new AnalisisController();

        $ringkasan = $analisis->ringkasan();

        $dataBarang = $analisis->dataAnalisis();

        // Menghitung total stok seluruh barang
        $totalStok = 0;

        foreach ($dataBarang as $item) {
            if ($item['valid']) {
                $totalStok += $item['stok_akhir'];
            }
        }

        // Menghitung total kebutuhan pengadaan
        $totalPengadaan = 0;

        foreach ($dataBarang as $item) {
            if ($item['valid']) {
                $totalPengadaan += $item['kebutuhan'];
            }
        }

        return view('dashboard', compact(
            'barang',
            'ringkasan',
            'totalStok',
            'totalPengadaan',
            'dataBarang'
        ));
    }
}
