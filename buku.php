<?php
class Buku
{
    private $db; // Objek koneksi database

    public function __construct()
    {
        require 'koneksi.php'; // Menginisialisasi koneksi database
    }


    public function TampilBuku()
    {
        $query = $this->db->query("select * from buku");
        $query->execute();
        return $query;
    }

    public function TambahBuku($id_buku, $judul_buku, $pengarang, $tahun_terbit)
    {
        $query = $this->db->prepare("insert into buku (id_buku, judul_buku, pengarang, tahun_terbit) values (:id_buku, :judul_buku, :pengarang, :tahun_terbit)");
        $query->bindParam('id_buku', $id_buku);
        $query->bindParam('judul_buku', $judul_buku);
        $query->bindParam('pengarang', $pengarang);
        $query->bindParam('tahun_terbit', $tahun_terbit);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function EditBuku($id_buku, $judul_buku, $pengarang, $tahun_terbit)
    {
        $query = $this->db->prepare("update buku set judul_buku = :judul_buku, pengarang = :pengarang, tahun_terbit = :tahun_terbit where id_buku = :id_buku");
        $query->bindParam('id_buku', $id_buku);
        $query->bindParam('judul_buku', $judul_buku);
        $query->bindParam('pengarang', $pengarang);
        $query->bindParam('tahun_terbit', $tahun_terbit);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function AmbilBuku($id_buku)
    {
        $query = $this->db->prepare("select * from buku where id_buku = :id_buku");
        $query->bindParam('id_buku', $id_buku);
        $query->execute();
        if ($query) {
            return $query;
        } else {
            return 'gagal';
        }
    }

    public function HapusBuku($id_buku)
    {
        $query = $this->db->prepare("delete from buku where id_buku = :id_buku");
        $query->bindParam('id_buku', $id_buku);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }
}
