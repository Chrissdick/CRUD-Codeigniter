<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        .input-items {
            padding:5px;
        }
        .backbtn{
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
    <button><a class="backbtn" href="../">Back</a></button>
    <center>
    <form action="create" method="POST">
        <div class="input-items">
            <label for="nama" style="margin-right:10px">Nama Siswa</label>
            <input type="text" id="nama" name="siswa" required>
        </div>
        <div class="input-items">
            <label for="NISN" style="margin-right:53px">NISN</label>
            <input type="number" id="NISN" name="NISN" required>
        </div>
        <div class="input-items">
            <label for="nohp" style="margin-right:48px">No Hp</label>
            <input type="number" id="nohp" name="nohp" required>
        </div>
        <div class="input-items">
            <label style="margin-right:179px">Status</label>
            <select name="status" id="status" style="margin-right=350% !important">
                <option value="1">Aktif</option>
                <option value="0">Mati</option>
            </select>
        </div>
        <br>
        <div>
            <button type="submit" name="submit">Simpan</button>
        </div>
    </form>
    </center> 
</body>
</html>