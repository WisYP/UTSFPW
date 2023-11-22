<?php

namespace App\Http\Controllers;
use App\Models\barang;
use Illuminate\Http\Request;

class barangController extends Controller
{

    public function input()
    {
        return view('barang');
    }

    public function praktikum()
    {
        return view('utama');
    }

    public function proses(Request $request)
    {
        // Validasi input data sesuai kebutuhan
        $request->validate([
            'kodebarang' => 'required|string',
            'namabarang' => 'required|string',
            'varian' => 'required|string',
            'quantity' => 'required|numeric|min:1',
            'harga' => 'required|numeric',
            
        ]);

        // Simpan data barang ke database
        $barang = Barang::create([
            'kodebarang' => $request->kodebarang,
            'namabarang' => $request->namabarang,
            'varian'=> $request->varian,
            'quantity' => $request->quantity,
            'harga' => $request->harga,
        ]);

        $barangs = Barang::create($request->all());

        // Hitung total belanjaan
        $totalBelanjaan = $barang->harga * $barang->quantity;

        // Tentukan diskon berdasarkan total belanjaan
        $diskon = 0;
        if ($totalBelanjaan >= 500000) {
            $diskon = 50;
        } elseif ($totalBelanjaan >= 200000) {
            $diskon = 20;
        } elseif ($totalBelanjaan >= 100000) {
            $diskon = 10;
        }
        // Hitung harga setelah diskon
        $hargaSetelahDiskon = $totalBelanjaan - ($totalBelanjaan * ($diskon / 100));

        // Tampilkan hasil output
        $output = [
            'kodebarang' => $barang->kodebarang,
            'namabarang' => $barang->namabarang,
            'varian'=> $barang->varian,
            'quantity' => $barang->quantity,
            'harga' => $barang->harga,
            'total_belanjaan' => $totalBelanjaan,
            'diskon' => $diskon,
            'harga_setelah_diskon' => $hargaSetelahDiskon,
        ];

        return view('outputBarang', ['output' => $output]);
    }
}
