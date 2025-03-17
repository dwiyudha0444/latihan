<!DOCTYPE html>
<html>
<head>
    <title>Tambah Anggota</title>
</head>
<body>
    <h2>Tambah Anggota</h2>
    <form action="/anggota/store" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        
        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>
        
        <label>Telepon:</label>
        <input type="text" name="telepon" required><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
