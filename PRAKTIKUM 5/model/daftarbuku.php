<?php

require_once "model/buku.php";

class DaftarBuku {
    public function getData() {
        $daftar_buku = array(
            new Buku('Belajar Pemrograman Web', 'Emely W.', 'Informatika', '2024'),
            new Buku('Matematika', 'deni khairul anam', 'Andi Publisher', '2024'),
            new Buku('Pemrograman PHP', 'Budi S.', 'Gramedia', '2023'),
            new Buku('Algoritma dan Struktur Data', 'Zara P.', 'Informatika', '2022')
        );
        return $daftar_buku;
    }

    public function getKolomTable() {
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
}
