<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nama[] = "Muhammad";
        $nama[] = " Zaim";
        $nama[] = " Maulana";
        echo $nama[0].$nama[1].$nama[2];
        echo "<br>";
        $jum_array = count($nama);
        echo "jumlah elemen array = ".$jum_array;
    ?>
</body>
</html>