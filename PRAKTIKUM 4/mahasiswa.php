<?php

require_once "orang.php";
require_once "nilai.php";

class mahasiswa extends orang {
    protected string $nim ;
    protected nilai $nilai ;

public function setnim ($nim) {
    $this ->nim =$nim;
}
public function setnilai ($nilai) {
    $this ->nilai =$nilai;
}
    public function getnim () {
        return $this->nim;
    }
    public function getnilai () {
        return $this->nilai;
    }
    public function tampilkandata(){
        echo "nama   :" . $this ->nama . "<br>";
        echo "nim   :" . $this ->nim . "<br>";
        echo "nilai tugas   :" . $this ->nilai->getTugas() . "<br>";
        echo "nilai uts    :" . $this ->nilai->getUts() . "<br>";
        echo "nilai uas   :" . $this ->nilai->getUas() . "<br>";
    }
}
