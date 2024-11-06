<?php

require_once "Buku.php";
require_once "database/database.php";

class DaftarBuku {
    public function getData() {
        $db = new Database();
        $koneksi = $db->getKoneksi();
        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $buku = new Buku($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
               // $buku->setId($row['id']);//
                array_push($daftar_buku, $buku);
            }
        }
        return $daftar_buku;
    }

    public function getKolomTabel() {
        return ['No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun'];
    }

    public function simpan($buku) {
        $db = new Database();
        $koneksi = $db->getKoneksi();
        $sql = "INSERT INTO buku (Judul, Pengarang, Penerbit, Tahun) VALUES ('" . $buku->getJudul() . "', '" . $buku->getPengarang() . "', '" . $buku->getPenerbit() . "', '" . $buku->getTahun() . "')";
        $koneksi->query($sql);
    }

    public function hapus($id) {
        if (empty($id)) {
            throw new Exception("ID tidak boleh kosong");
        }
    
        $db = new Database();
        $koneksi = $db->getKoneksi();
        $sql = "DELETE FROM buku WHERE id = $id";
        $koneksi->query($sql);
    
    
        // Menggunakan prepared statement untuk mencegah SQL Injection
        $stmt = $koneksi->prepare("DELETE FROM buku WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    
        if ($stmt->affected_rows > 0) {
            echo "Data berhasil dihapus.";
        } else {
            echo "Data tidak ditemukan atau gagal dihapus.";
        }
    
        $stmt->close();
    }
    
}
