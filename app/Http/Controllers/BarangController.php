<?php
namespace App\Http\Controllers;

use App\Data\BarangData;

class BarangController extends Controller
{
    // Menampilkan seluruh daftar barang
    public function index()
    {
        $barang = BarangData::semua();

        return view('barang.index', compact('barang'));
    }

    // Menampilkan barang berdasarkan kategori
    public function kategori($nama)
    {
        $barang = BarangData::semua();

        $hasil = array_filter($barang, function ($item) use ($nama) {
            return strtolower($item['kategori']) == strtolower($nama);
        });

        return view('barang.kategori', [
            'barang' => $hasil,
            'kategori' => $nama
        ]);
    }

    // Menampilkan detail barang
    public function detail($id)
    {
        $barang = BarangData::semua();

        $hasil = array_filter($barang, function ($item) use ($id) {
            return $item['id'] == $id;
        });

        if (empty($hasil)) {
            abort(404);
        }

        $detail = array_values($hasil)[0];

        return view('barang.detail', compact('detail'));
    }
}

