<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <center>
    <form action="create" method="POST">
        <div>
            <label>Nama Siswa</label>
            <input type="text" id="nama" name="siswa" required>
        </div>
        <div>
            <label>NISN</label>
            <input type="number" id="NISN" name="NISN" required>
        </div>
        <div>
            <label>Status</label>
            <select name="status" id="status">
                <option value="1">Aktif</option>
                <option value="0">mati</option>
            </select>
        </div>
        <div>
            <button type="submit" name="submit">Simpan</button>
        </div>
    </form>
    </center> 
</body>
</html>