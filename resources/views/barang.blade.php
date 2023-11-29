@extends('utama')

@section('content')
    
<body>
    <form method="post" action="/prosesBarang">
        @csrf
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description">
                        Basic form layout
                    </p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="kodebarang">Kode Barang</label>
                            <input type="text" class="form-control" placeholder="Kode Barang" name="kodebarang" required>
                        </div>
                        <div class="form-group">
                            <label for="namabarang">Nama Barang</label>
                            <input type="text" class="form-control" placeholder="Nama Barang" name="namabarang" required>
                        </div>
                        <div class="form-group">
                            <label for="varian">Varian</label>
                            <input type="text" class="form-control" placeholder="Varian" name="varian" required>
                        </div>
                        <div class="form-group">
                            <label for="quantity">QTY</label>
                            <input type="number" class="form-control" placeholder="quantity" name="quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" placeholder="Harga" name="harga" required>
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>
@endsection