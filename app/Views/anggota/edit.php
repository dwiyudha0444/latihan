<!DOCTYPE html>
<html>
<head>
    <title>Edit Anggota</title>
</head>
<body>
    <h2>Edit Anggota</h2>
    <form action="/anggota/update/<?= $anggota['id'] ?>" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $anggota['nama'] ?>" required><br>
        
        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?= $anggota['alamat'] ?>" required><br>
        
        <label>Telepon:</label>
        <input type="text" name="telepon" value="<?= $anggota['telepon'] ?>" required><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
