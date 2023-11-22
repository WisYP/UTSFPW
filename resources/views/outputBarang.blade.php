<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Sky blue background */
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #87ceeb; /* Light blue background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #000080; /* Dark blue header */
        }

        strong {
            color: #000080; /* Dark blue strong text */
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Output Barang</h1>
        <p><strong>Kode Barang:</strong> {{ $output['kodebarang'] }}</p>
        <p><strong>Nama Barang:</strong> {{ $output['namabarang'] }}</p>
        <p><strong>Jenis Varian:</strong> {{ $output['varian'] }}</p>
        <p><strong>Quantity:</strong> {{ $output['quantity'] }}</p>
        <p><strong>Harga Barang:</strong> {{ $output['harga'] }}</p>
        <p><strong>Total Belanjaan:</strong> {{ $output['total_belanjaan'] }}</p>
        <p><strong>Diskon:</strong> {{ $output['diskon'] }}%</p>
        <p><strong>Harga Setelah Diskon:</strong> {{ $output['harga_setelah_diskon'] }}</p>
    </div>
</body>
</html>
