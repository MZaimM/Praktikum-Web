<?php 
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
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
    <table border="1">
        <tr>
            <thead>
                <th>Nomor Induk Mahasiswa</th>
                <th>Nama Mahasiswa</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
            </thead>
        </tr>
        <tr>
            <tbody>
                <td><?php echo $nim ?></td>
                <td><?php echo $nama ?></td>
                <td><?php echo $tempatLahir ?></td>
                <td><?php echo $tanggalLahir ?></td>
                <td><?php echo $fakultas ?></td>
                <td><?php echo $jurusan ?></td>
            </tbody>
        </tr>
    </table>
</body>
</html>