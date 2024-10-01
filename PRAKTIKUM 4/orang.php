<?php

class  orang {
    protected $nama;

    public function setnama ($nama ){
        $this->nama=$nama;
    }
     
    public function ucapSalam (){
        echo "halo perkenalkan nama saya " . $this ->nama . "<br>";
     }
}