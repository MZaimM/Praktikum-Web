<?php
$a = $_POST['username'];
$b = $_POST['password'];
$c = $_POST['nama'];
$d = $_POST['alamat'];
$e = $_POST['sex'];
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
    <table border = "1">
        <tr>
            <thead>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
            </thead>
        </tr>
        <tr>
            <tbody>
                <th><?php echo $a; ?></th>
                <th><?php echo $b; ?></th>
                <th><?php echo $c; ?></th>
                <th><?php echo $d; ?></th>
                <th><?php echo $e; ?></th>
            </tbody>
        </tr>
    </table>
</body>
</html>