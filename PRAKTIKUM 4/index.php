<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum 4</title>
    <style>
        

        

    </style>
</head>
<body>
    <h1>konsep pewarisan</h1>
    <div class ="">
        <?php

        require_once "orangBiasa.php" ;
        require_once "orangInggris.php";
        require_once "mahasiswa.php";

        $deni = new orangBiasa();
        $deni ->setnama ('deni khairul');
        $deni ->ucapsalam ();

        echo"<br>";

        $rano = new orangInggris();
        $rano ->setnama ("rano karno");
        $rano ->ucapsalam ();

        echo"<br>";

        $mahasiswa = new mahasiswa();  
        $mahasiswa ->setnama ('emely walker');
        $mahasiswa ->setnim ("701230058");

        $nilaimahasiswa =new nilai ();
        $nilaimahasiswa->setTugas (70);
        $nilaimahasiswa->setUts (67);
        $nilaimahasiswa->setUas(90);

        $mahasiswa->setnilai ($nilaimahasiswa);

        $mhasiswa->ucapsalam(); 
        $mahasiswa->tampilkandata();
        ?>
    </div>
</body>
</html>