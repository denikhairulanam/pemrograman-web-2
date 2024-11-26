<?php

require_once "Model/DaftarBuku.php";

class BukuController{
//ngambil nilai get
    public function jalankan(){
        if (!isset($_COOKIE ['theme'])){
            $theme_value ="light";
          }
    //set cookie
          if (!isset($_COOKIE ['theme']) ||  isset ($_GET ['theme'])){
            setcookie ('theme', $theme_value,time()+3600*24);
          }else{
            $theme_value =$_COOKIE ['theme'];
          }
          //hapus cookie
          if (isset($_COOKIE ['theme']) && isset ($_get['hapus_theme'])){
            setcookie  ("theme");
          }
        // mengakses model
        $Data = new DaftarBuku();

        // memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['Judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $status =$daftar_buku->simpan($buku);
        if($status ){
           // membuat session
            $_SESSION ['berhasil']='data berhasil di simpan !';
        }else{
            $_SESSION['gagal']='data gagal di simpan !!';
        }

        header('Location: http://localhost/index.php');
        
    }

    public function hapus(){
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: http://localhost/index.php');
    
    }

    public function edit(){
        $id = $_GET['id']; // Menangkap id dari query string
        $daftar_buku = new DaftarBuku(); // Membuat objek DaftarBuku
        $buku = $daftar_buku->getBukuById($id); // Mendapatkan data buku berdasarkan id
    
        if ($buku) {
            include_once "View/EditBukuView.php"; // Tampilkan form edit
        } else {
            header("Location: http://localhost/index.php"); // Redirect jika tidak ditemukan
            exit;
        }
    }
    
    public function update(){

        $buku = new Buku($_POST['Judul'], $_POST['Pengarang'], $_POST['Penerbit'], $_POST['Tahun']);
        $buku->setId($_POST['id']); // Set ID buku yang akan diupdate
    
        $daftar_buku = new DaftarBuku();
       $status= $daftar_buku->update($buku); // Memperbarui data buku
    
        header("Location: http://localhost/index.php"); // Redirect ke halaman utama
        exit;
    }
}