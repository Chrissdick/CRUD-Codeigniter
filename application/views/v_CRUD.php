<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <a href="latihan/create_page">tambah data</a>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>ID Siswa</th>
            <th>Nama Siswa</th>
            <th>NISN</th>
            <th>Status</th>
            <th colspan='2'>Aksi</th>
        </tr>
        <?php $no=1; ?>
        <?php foreach($siswa AS $row): ?>
        <tr>
            <td><?= $no++;?></td>
            <td><?= $row->id_siswa;?></td>
            <td><?= $row->nama_siswa;?></td>
            <td><?= $row->NISN;?></td>
            <td><?= $row->status;?></td>
            <td><a href="latihan/edit_page/<?= $row->id_siswa; ?>">Edit</a></td>
            <td><a href="latihan/delete/<?= $row->id_siswa; ?>">Hapus</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>