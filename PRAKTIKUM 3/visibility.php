<?php
 class visibility {
    public $publik = 'publik' ;
    private $private ='private' ;
    protected $protected ='protected' ;

    function tampilkanData(){
        echo "akses di dalam kelas <br>";
        echo "publik" . $this ->publik . "<br>";
        echo "private " . $this ->private . "<br>";
        echo "protected" . $this -> protected . "<br>";
        }

 }