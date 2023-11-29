@extends('utama')

@section('content')
    <div class="row mt-5">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>kodebarang</th>
                                <th>namabarang</th>
                                <th>varian</th>
                                <th>quantity</th>
                                <th>harga</th>
                                <th>total belanjaan</th>
                                <th>total harga setelah diskon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ListBarang as $barang)
                            <tr>
                                <td>{{$barang->kodebarang}}</td>
                                <td>{{$barang->namabarang}}</td>
                                <td>{{$barang->varian}}</td>
                                <td>{{$barang->quantity}}</td>
                                <td>{{$barang->harga}}</td>
                                <td>{{$barang->totalBelanjaan}}</td>
                                <td>{{$barang->hargaSetelahDiskon}}</td>
                                <td>
                                    <a href="{{route('edit.form',['id'=>$barang->id])}}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
