<?php

require 'buku.php';
$buku = new Buku();


if (isset($_GET['id_buku'])) {
    $id_buku = $_GET['id_buku'];


    $hapus = $buku->HapusBuku($id_buku);


    if ($hapus == 'berhasil') {

        header('location:index.php');
        exit();
    } else {

        echo "Gagal menghapus buku";
    }
} else {

    echo "ID buku tidak ditemukan";
}
