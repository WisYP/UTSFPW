@extends('utama')
@section('content')

<form class="forms-sample" action="{{ route('edit',['id'=>$barang->id]) }}" method="POST" id="form">
    @csrf
    <div class="form-group">
        <label for="code">Kode Barang</label>
        <input type="text" class="form-control" id="kodebarang" name="kodebarang" placeholder="Kode Barang" value="{{$barang->kodebarang}}">
    </div>
    <div class="form-group">
        <label for="nama">Nama Barang</label>
        <input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Nama Barang" value="{{$barang->namabarang}}">
    </div>
    <div class="form-group">
        <label for="jenis">Jenis Varian</label>
        <input type="text" class="form-control" id="varian" name="varian" placeholder="Varian" value="{{$barang->varian}}">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity"
            placeholder="Jumlah Barang" value="{{$barang->quantity}}">
    </div>
    <div class="form-group">
        <label for="harga">Harga Jual</label>
        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Barang" value="{{$barang->harga}}">
    </div>
    <button type="submit" class="btn btn-primary me-2">Proses</button>

</form>
@endsection

