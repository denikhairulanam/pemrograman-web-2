<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 4px;
        }
    </style>
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <h2>NILAI MAHASISWA</h2>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>TUGAS</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TOTAL NILAI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "nilai.php";

            $mhs1 = new Nilai();
            $mhs1->setTugas(90);
            $mhs1->setUts(85);
            $mhs1->setUas(95);

            $mhs2 = new Nilai();
            $mhs2->setTugas(56);
            $mhs2->setUts(75);
            $mhs2->setUas(80);

            $mhs3 = new Nilai();
            $mhs3->setTugas(65);
            $mhs3->setUts(34);
            $mhs3->setUas(45);

            // menggunakan fungsi display
            function displayStudent($no, $nama, $mhs) {
                echo "<tr>
                        <td>$no</td>
                        <td>$nama</td>
                        <td>" . $mhs->getTugas() . "</td>
                        <td>" . $mhs->getUts() . "</td>
                        <td>" . $mhs->getUas() . "</td>
                        <td>" . $mhs->getTotalNilai() . "</td>
                      </tr>";
            }

            displayStudent(1, "James Smith", $mhs1);
            displayStudent(2, "John Doe", $mhs2);
            displayStudent(3, "Alice Johnson", $mhs3);
            ?>
        </tbody>
    </table>
</body>
</html>
