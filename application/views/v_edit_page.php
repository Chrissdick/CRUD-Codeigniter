<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <center>
        <?php foreach($edit AS $row):?>
    <form action="<?=base_url('latihan/edit/').$row->id_siswa?>" method="POST">
        <div>
            <label>Nama Siswa</label>
            <input type="text" id="nama" name="siswa" value="<?= $row->nama_siswa; ?>">
        </div>
        <div>
            <label>NISN</label>
            <input type="number" id="NISN" name="NISN" value="<?= $row->NISN; ?>">
        </div>
        <div>
            <label>Status</label>
            <select name="status" id="status">
                <option value="1"<?=  $selected = $row->status?'selected':false; ?>>Aktif</option>
                <option value="0" <?= $selected = $row->status?false:'selected'; ?>>mati</option>
            </select>
        </div>
        <div>
            <button type="submit" name="submit">Simpan</button>
        </div>
    </form>
        <?php endforeach;?>
    </center> 
</body>
</html>