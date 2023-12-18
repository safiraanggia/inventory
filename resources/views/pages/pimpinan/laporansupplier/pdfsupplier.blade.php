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
        <p align="center"><b>Laporan Supplier</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Supplier</th>
            <th>Perusahaan</th>
            <th>No Telp</th>
            <th>Alamat</th>
        </tr>
            @foreach($supplier as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->kode_supplier }}</td>
                    <td class="align-middle">{{ $rs->nama_supplier }}</td>
                    <td class="align-middle">{{ $rs->nama_perusahaan }}</td>
                    <td class="align-middle">{{ $rs->no_telp_supplier }}</td>
                    <td class="align-middle">{{ $rs->alamat_supplier }}</td>
                </tr>
            @endforeach
    </table>
    </div>
</body>
</html>