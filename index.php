<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>

<body>
    <a href="tambah.php">Tambah Data Buku</a>
    <?php
    require 'buku.php';
    $buku = new Buku();
    $data = $buku->TampilBuku();
    ?>
    <table border="1">
        <thead>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            foreach ($data as $value) { ?>
                <tr>
                    <td><?= $value['id_buku'] ?></td>
                    <td><?= $value['judul_buku'] ?></td>
                    <td><?= $value['pengarang'] ?></td>
                    <td><?= $value['tahun_terbit'] ?></td>
                    <td>
                        <a href="edit.php?id_buku=<?= $value['id_buku'] ?>">Edit </a>
                        <a href="hapus.php?id_buku=<?= $value['id_buku'] ?>"> Hapus</a>

                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>
