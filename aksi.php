<?php

require 'buku.php';
$buku = new Buku();

//jika menekan tombol tambah buku
if (isset($_POST['tambah_buku'])) {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $tambah = $buku->TambahBuku($id_buku, $judul_buku, $pengarang, $tahun_terbit);
    if ($tambah == 'berhasil') {
        header('location:index.php');
    }
}



//jika menekan tombol hapus
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



//jika menekean tombol edit
if (isset($_POST['edit_buku'])) {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang  = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $tambah = $buku->EditBuku($id_buku, $judul_buku, $pengarang, $tahun_terbit);
    if ($tambah == 'berhasil') {
        header('location:index.php');
    }
}
