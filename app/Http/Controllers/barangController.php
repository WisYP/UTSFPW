<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class barangController extends Controller
{

    public function input()
    {
        return view('barang');
    }

    public function index(){
        $listbarang = Barang::all();

        foreach ($listbarang as $key => $barang){
            $listbarang[$key]->totalBelanjaan = $barang->harga * $barang->quantity;
            $listbarang[$key]->diskon = $this->hitungDiskon($listbarang[$key]->totalBelanjaan);
            $potonganHarga = ($listbarang[$key]->diskon / 100) * $listbarang[$key]->totalBelanjaan;
            $listbarang[$key]->hargaSetelahDiskon = $listbarang[$key]->totalBelanjaan - $potonganHarga;

        }
        return view('index',['ListBarang'=>$listbarang]);
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
    private function hitungDiskon($totalHarga)
    {
        if ($totalHarga >= 500000) {
            return 50;
        } elseif ($totalHarga >= 200000) {
            return 20;
        } elseif ($totalHarga >= 100000) {
            return 10;
        }

        return 0;
    }

    public function editForm($id)
    {
        $barang = Barang::find($id);
        return view('edit', ['barang' => $barang]);
    }



    public function edit(Request $request, $id)
    {

        $barang = Barang::find($id);

        if ($barang) {
            //'kodebarang', 'namabarang', 'jenisvarian', 'qty', 'hargajual'
            $barang->kodebarang = $request->kodebarang;
            $barang->namabarang = $request->namabarang;
            $barang->varian = $request->varian;
            $barang->quantity = $request->quantity;
            $barang->harga = $request->harga;
            $barang->save();
            return redirect()->route('home');


        }
    }
}

