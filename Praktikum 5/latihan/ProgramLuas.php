<?php
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $Luas = $panjang * $lebar;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLuas.css">
    <title>Program Menghitung Luas Persegi Panjang</title>
</head>
<body>
    <div class= "top">
        <p class="nProgram">Program Menghitung Luas Persegi</p>
        <p class ="nAuthor">Muhammad Zaim Maulana (19650058)</p>
    </div>
    <div class = "pembungkus">
        <div class="header">

        </div>
        <div class ="konten">
            <h2 class="judulArtikel">Menghitung Luas Persegi Panjang</h2>
            <p class="tanggalPosting"><?php echo date("D, d F Y"); ?></p>
            <form action="ProgramLuas.php" method="post">
                <table>
                    <tr>
                        <td>Panjang</td>
                        <td><input type="text" name="panjang" id=""></td>
                        <td rowspan="3">
                            <h3>Hasil : <span name="luas"><?php echo $Luas?></span></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Lebar</td>
                        <td><input type="text" name="lebar" id=""></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Hitung Luas"></td>
                    </tr>

                </table>
            </form>
        </div>
    </div>
</body>
</html>