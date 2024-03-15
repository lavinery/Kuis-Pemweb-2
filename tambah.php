<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>

<body>
    <form action='aksi.php' method="post">
        ID <br>
        <input type='text' name='id_buku' required>
        <br>Judul Buku <br>
        <input type='text' name='judul_buku' required>
        <br>Pengarang <br>
        <input type='text' name='pengarang' required>
        <br>Tahun Terbit <br>
        <input type='text' name='tahun_terbit' required>
        <br>
        <input type="submit" name="tambah_buku" value="tambah">
    </form>
</body>

</html>