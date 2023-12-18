<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>CETAK LAPORAN SUPPLIER</title>
</head>
<body>
    <div class="fore-group">
        <p align="center"><b>Laporan barang</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
                <th>No</th>
                <th>Nama produk</th>
                <th>Jumlah Masuk</th>
                <th>Jumlah Keluar</th>
                <th>Total Stock</th>
        </tr>
       @foreach($data['data'] as $index => $item)
                <tr>
                    <td>{{ $index }}</td>
                    <td>{{ $item['nama_product'] }}</td>
                    <td>{{ $item['total_jumlah_masuk'] }}</td>
                    <td>{{ $item['total_jumlah_keluar'] ?? 0 }}</td>
                    <td>{{ $item['total_stok'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>