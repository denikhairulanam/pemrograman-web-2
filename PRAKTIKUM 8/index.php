<?php
include "controler/bukucontroler.php";

$aplikasi = new bukucontroller();

$REQUEST = $_SERVER['REQUEST_URI'];
$REQUEST = parse_url($REQUEST, PHP_URL_PATH);

switch ($REQUEST) {
    case '/':
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan':
        $aplikasi->simpan();
        break;
    case '/index.php/buku/hapus':
        $aplikasi->hapus();
        break;
    default:
        $aplikasi->jalankan();
}
