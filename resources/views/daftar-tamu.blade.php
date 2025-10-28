<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tamu</title>
</head>
<body>
    <h2>Daftar Tamu</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor Kamar</th>
            <th>Tanggal Check-in</th>
            <th>Tanggal Check-out</th>
            <th>Status Pembayaran</th>
        </tr>

        @foreach($tamu as $tm)
        <tr>
            <td>{{ $tm->id }}</td>
            <td>{{ $tm->nama }}</td>
            <td>{{ $tm->nomorkamar}}</td>
            <td>{{ $tm->tanggalcheckin }}</td>
            <td>{{ $tm->tanggalcheckout }}</td>
            <td>{{ $tm->statuspembayaran}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
