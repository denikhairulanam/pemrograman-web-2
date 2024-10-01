<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class =" ">
        <?php
        include "visibility.php";

        $visibility =new visibility();
        $visibility ->tampilkanData();

        echo "<br>";
        echo "akses di luar kelas:" . $visibility ->publik . "<br>";
        echo "publik :" . $visibility->publik . "<br>";
       // echo "private :" . $visibility->private . "<br>";
       // echo "protected :" . $visibility->protected . "<br>";
        echo "<br><br>";
        echo "<h2>konsep pewarisan<h>";

        include "mahasiswa.PHP";

        $mahasiswa = new mahasiswa ("emely smith");
        $mahasiswa ->ucapsalam();

        $mahasiswa = new mahasiswa ("deni khairul ");
        $mahasiswa ->ucapsalam();

        ?>
    </div>
</body>
</html>