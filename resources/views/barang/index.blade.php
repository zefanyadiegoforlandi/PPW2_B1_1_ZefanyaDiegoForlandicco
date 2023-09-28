<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gudang Barang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Data Barang</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>ID Supplier</th>
            </tr>
        </thead>
        <tbody> 
            @php
            @endphp   
            @foreach($data_barang as $barang)
            <tr>
                <td>{{ $barang->id_barang }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ 'Rp'.number_format($b->harga, 2, ',', '.') }}</td>
                <td>{{ $barang->stock }}</td>
            </tr>    
            @endforeach
        </tbody>
    </table>
</body>
</html>
