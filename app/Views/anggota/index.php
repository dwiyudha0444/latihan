<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
</head>
<body>
    <h2>Daftar Anggota</h2>
    <a href="/anggota/create">Tambah Anggota</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($anggota as $a): ?>
        <tr>
            <td><?= $a['id'] ?></td>
            <td><?= $a['nama'] ?></td>
            <td><?= $a['alamat'] ?></td>
            <td><?= $a['telepon'] ?></td>
            <td>
                <a href="/anggota/edit/<?= $a['id'] ?>">Edit</a> |
                <a href="/anggota/delete/<?= $a['id'] ?>" onclick="return confirm('Hapus anggota ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
