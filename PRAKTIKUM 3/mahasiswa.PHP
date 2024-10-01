<?php
include "orang.php";

class mahasiswa extends orang{
    public $nim;
    public $prodi;

    public function getNilaiSemester(){

    }
}
class mahasiswaasing extends mahasiswa {

    //overaide 
    public function ucapsalam(){
        echo "hello my name " . $this ->nama;
    }  
}