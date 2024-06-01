<!DOCTYPE html>
<html>
<head>
    <title>Data Keuangan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table,th, td{
            border: 1px solid black;
            padding: 8px;
        }
        th{
            backgorund-color: #f2f2f2
        }
    </style>
</head>
<body>
    <h1>Data Keuangan</h1>
    <table>
        <thead>
                <tr>
                    <th>No</th>
                    <th>tanggal</th>
                    <th>deskripsi</th>
                    <th>kategori</th>
                    <th>pemasukan</th>
                    <th>pengeluaran</th>
                </tr>
            </thead>
            <tbody>
                @php($no = 1)
                @foreach ($keuangan as $row)
                <tr>
                    <th>{{ $no++ }}</th>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->deskripsi   }}</td>
                    <td>{{ $row->kategori }}</td>
                    <td>{{ $row->pemasukan }}</td>
                    <td>{{ $row->pengeluaran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>