<?php

require_once "Buku.php";
require_once "database/database.php";

class DaftarBuku {
    public function getData() {
        $db = new Database();
        $koneksi = $db->getKoneksi();
        $daftar_buku = [ ];

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $buku = new Buku($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
                 $buku->setId($row[ 'id' ]); 
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
        $query = $koneksi->query($sql);
        return $query;
    }

    public function hapus($id) {

      $db = new Database();
      $koneksi = $db->getKoneksi();

      $sql = "DELETE FROM buku WHERE id = " . $id ;

      $query = $koneksi ->query($sql);
      return $query;
    }

    public function update($buku){
        $db =new Database();
        $koneksi=$db->getKoneksi();

        $sql = "INSERT INTO buku (judul, pengarang, penerbit, tahun) VALUES ('".$buku->getJudul()."', '".$buku->getPengarang()."', '".$buku->getPenerbit()."', '".$buku->getTahun()."')";
        $query = $this->$koneksi->query($sql);
        return $query;
    }
    public function getBukuById($id){
        $db = new Database ();
        $koneksi=$db->getKoneksi();

        $sql ="SELECT * FROM buku WHERE id=" . $id;
        $query=$koneksi->query($sql);
        

        if ($query->num_rows > 0){
            $data =$query ->fetch_assoc();

            $buku =new buku ($data ['Judul'], $data ['Pengarang'], $data ['Penerbit'], $data['Tahun']);
            $buku->setid($data['id']);

            return $buku;
        }
        return false;
    }
}
    