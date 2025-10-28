<!DOCTYPE html>
<html>
<head>
    <title>Form Input Tamu</title>
</head>
<body>
    <h2>Input Data Tamu</h2>

    <form action="/simpan" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Nomorkamar:</label><br>
        <input type="text" name="nomorkamar"><br><br>

        <label>Tanggal check-in:</label><br>
        <input type="date" name="tanggalcheckin"><br><br>

        <label>Tanggal check-out:</label><br>
        <input type="date" name="tanggalcheckout"><br><br>

        <label>Status Pembayaran:</label><br>
        <input type="text" name="statuspembayaran"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
