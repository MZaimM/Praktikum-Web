<?php
    require('DataMahasiswa.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jawaban Soal 1 Array</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NRP</th>
        </tr>
        <?php
        //for-loop dan if-else

        foreach ($mahasiswa as $mhs => $value) {
            for ($value=0; $value < 1 ; $value++) { 
                if ($mahasiswa[$mhs]["IPK"]>3.00 && $mahasiswa[$mhs]["IPK"]<3.25) {
                    echo "<tr>";
                    echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                    echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                    echo "</tr>";
                }else if ($mahasiswa[$mhs]["Rambut"] == "hitam dan lurus") {
                    echo "<tr>";
                    echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                    echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                    echo "</tr>";
                }elseif ($mahasiswa[$mhs]["Berat"] == 50 && $mahasiswa[$mhs]["Tinggi"] == 160) {
                    echo "<tr>";
                    echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                    echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                    echo "</tr>";
                }elseif ($mahasiswa[$mhs]["status"] == "tidak cuti") {
                    echo "<tr>";
                    echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                    echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                    echo "</tr>";
                }
            }
        }

        //while dan switch-case
        foreach ($mahasiswa as $mhs => $value) {
            $value = 0;
            while ($value < 1) {
                switch ($mahasiswa) {
                    case $mahasiswa[$mhs]["IPK"]>3.00 && $mahasiswa[$mhs]["IPK"]<3.25:
                        echo "<tr>";
                        echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                        echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                        echo "</tr>";
                        break;
                    case $mahasiswa[$mhs]["Rambut"] == "hitam dan lurus":
                        echo "<tr>";
                        echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                        echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                        echo "</tr>";
                        break;
                    case $mahasiswa[$mhs]["Berat"] == 50 && $mahasiswa[$mhs]["Tinggi"] == 160:
                        echo "<tr>";
                        echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                        echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                        echo "</tr>";
                        break;
                    case $mahasiswa[$mhs]["status"] == "tidak cuti":
                        echo "<tr>";
                        echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                        echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                        echo "</tr>";
                        break;
                    default:
                        break;
                }
                $value++;
            }
        }

        // do-while dan if-else
            
        foreach ($mahasiswa as $mhs => $value) {
            $value = 0;
            do {
                if ($mahasiswa[$mhs]["IPK"]>3.00 && $mahasiswa[$mhs]["IPK"]<3.25) {
                    echo "<tr>";
                    echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                    echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                    echo "</tr>";
                }else if ($mahasiswa[$mhs]["Rambut"] == "hitam dan lurus") {
                    echo "<tr>";
                    echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                    echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                    echo "</tr>";
                }elseif ($mahasiswa[$mhs]["Berat"] == 50 && $mahasiswa[$mhs]["Tinggi"] == 160) {
                    echo "<tr>";
                    echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                    echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                    echo "</tr>";
                }elseif ($mahasiswa[$mhs]["status"] == "tidak cuti") {
                    echo "<tr>";
                    echo "<td>". $mahasiswa[$mhs]["Nama"]."</td>";
                    echo "<td>". $mahasiswa[$mhs]["NRP"]."</td>";
                    echo "</tr>";
                }
                $value++;
            } while ($value < 1);
        }
    ?>
    </table>
</body>
</html>