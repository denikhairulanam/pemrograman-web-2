<?php

require_once "model/daftarbuku.php";

class BukuController {
    public function jalankan() {
        $data = new DaftarBuku(); 
        include "view/bukuview.php";  // Mengirimkan variabel $data ke view
    }

    public function simpan() {
        $buku = new Buku($_POST['Judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('Location: /index.php');
        exit;
    }

    public function hapus() {
        $id = $_POST['id_hapus'];
        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: /index.php');
        exit;
    }
}
