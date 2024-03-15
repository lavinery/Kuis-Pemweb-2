<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit buku</title>
</head>
<?php
require 'buku.php';
$buku = new Buku();
if (isset($_GET['id_buku'])) {
    $id_buku = $_GET['id_buku'];
    $ambil = $buku->AmbilBuku($id_buku);
    $value = $ambil->fetch(PDO::FETCH_OBJ);
} else {
    // Redirect atau tindakan lain jika id tidak tersedia
    echo "ID tidak tersedia.";
    exit;
}
?>

<body>
    <form action='aksi.php' method="post">
        ID <br>
        <input type='text' readonly name="id_buku" value="<?= $value->id_buku ?>" required>
        <br>Judul Buku <br>
        <input type='text' name="judul_buku" value="<?= $value->judul_buku ?>" required>
        <br>Pengarang <br>
        <input type='text' name='pengarang' value="<?= $value->pengarang ?>" required>
        <br>Tahun Terbit <br>
        <input type='text' name='tahun_terbit' value="<?= $value->tahun_terbit ?>" required>
        <br>
        <input type="submit" name="edit_buku" value="edit">
    </form>
</body>

</html>