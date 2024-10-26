<?php

require_once "model/daftarbuku.php";

class bukucontroller {
    public function jalankan() {
        $data = new daftarbuku(); 
        // Mengirimkan variabel $data ke view
        include "view/bukuview.php";
    }
}
