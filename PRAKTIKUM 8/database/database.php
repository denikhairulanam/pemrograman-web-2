<?php

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databaseName = 'perpustakaan';
    private $koneksi;

    public function __construct() {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databaseName);

        if ($this->koneksi->connect_error) {
            die("Koneksi gagal: " . $this->koneksi->connect_error);
        }
    }

    public function getKoneksi() {
        return $this->koneksi;
    }

    public function __destruct() {
        $this->koneksi->close();
    }
}
