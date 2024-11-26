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
   case '/index.php/edit':
  //  var_dump("ok");
  //die();
       $aplikasi->edit();
       break;
        case '/index.php/buku/Update':
            //var_dump("ok");
            //die();
            $aplikasi->update();
            break;
    default:
        $aplikasi->jalankan();
}
