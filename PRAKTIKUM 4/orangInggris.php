<?php

require_once "orang.php";
class orangInggris extends orangBiasa{

    //override
    public function ucapSalam()
    {
        echo "hello my name is " . $this ->nama . "<br>";
    }
}