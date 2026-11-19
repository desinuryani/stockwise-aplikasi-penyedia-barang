<?php
namespace App\Http\Controllers;

use App\Data\BarangData;

class AnalisisController extends Controller
{
    
public function dataAnalisis()
{
    $barang = BarangData::semua();
    $hasil = [];

    foreach ($barang as $item) {

        $inputTidakValid =
            $item['stok_awal'] < 0 ||
            $item['barang_masuk'] < 0 ||
            $item['barang_keluar'] < 0 ||
            $item['stok_target'] < 0;

        $stokAkhir = $item['stok_awal']
            + $item['barang_masuk']
            - $item['barang_keluar'];

        if ($inputTidakValid || $stokAkhir < 0) {

            $item['valid'] = false;
            $item['stok_akhir'] = $stokAkhir;
            $item['status'] = 'Data Tidak Valid';
            $item['kebutuhan'] = 0;
            $item['prioritas'] = 'Tidak Dapat Ditentukan';

        } else {

            $item['valid'] = true;
            $item['stok_akhir'] = $stokAkhir;

            if ($stokAkhir == 0) {
                $item['status'] = 'Stok Habis';
            } elseif ($stokAkhir <= 10) {
                $item['status'] = 'Stok Menipis';
            } else {
                $item['status'] = 'Stok Aman';
            }

            $item['kebutuhan'] = max(
                0,
                $item['stok_target'] - $stokAkhir
            );

            if ($stokAkhir == 0) {
                $item['prioritas'] = 'Tinggi';
            } elseif ($stokAkhir <= 10) {
                $item['prioritas'] = 'Sedang';
            } elseif ($item['kebutuhan'] > 0) {
                $item['prioritas'] = 'Rendah';
            } else {
                $item['prioritas'] = 'Tidak Perlu';
            }
        }

        $hasil[] = $item;
    }

    $urutan = [
        'Tinggi' => 1,
        'Sedang' => 2,
        'Rendah' => 3,
        'Tidak Perlu' => 4,
        'Tidak Dapat Ditentukan' => 5,
    ];

    usort($hasil, function ($a, $b) use ($urutan) {
        return $urutan[$a['prioritas']]
            <=> $urutan[$b['prioritas']];
    });

    return $hasil;
}
    public function ringkasan()
    {
        $data = $this->dataAnalisis();

        return [
            'total_barang' => count($data),
            'stok_aman' => count(array_filter($data, fn($b) =>
                $b['status'] == 'Stok Aman'
            )),
            'stok_menipis' => count(array_filter($data, fn($b) =>
                $b['status'] == 'Stok Menipis'
            )),
            'stok_habis' => count(array_filter($data, fn($b) =>
                $b['status'] == 'Stok Habis'
            )),
            'data_tidak_valid' => count(array_filter($data, fn($b) =>
                !$b['valid']
            )),
        ];
    }

    public function index()
    {
        $dataBarang = $this->dataAnalisis();
        $ringkasan = $this->ringkasan();

        return view('analisis.index', compact(
            'dataBarang',
            'ringkasan'
        ));
    }

    public function rekomendasi()
    {
        $dataBarang = array_filter(
            $this->dataAnalisis(),
            function ($item) {
                return $item['valid'] && $item['kebutuhan'] > 0;
            }
        );

        return view('analisis.rekomendasi', compact('dataBarang'));
    }

}
