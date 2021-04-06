<?php
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kab'];
    $provinsi = $_POST['provinsi'];
    $jenisKelamin = $_POST['sex'];
    $agama = $_POST['agama'];
    $statusKawin = $_POST['statusKawin'];
    $pekerjaan = $_POST['pekerjaan'];
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
    <h1>Data Kependudukan</h1>
    <table border="1">
        <tr>
            <thead>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>RT</th>
                <th>RW</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten/Kota</th>
                <th>Provinsi</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Status Kawin</th>
                <th>Pekerjaan</th>
            </thead>
        </tr>
        <tr>
            <tbody>
                <td><?php echo $nik; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $tempatLahir; ?></td>
                <td><?php echo $tanggalLahir; ?></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $rt; ?></td>
                <td><?php echo $rw; ?></td>
                <td><?php echo $kelurahan; ?></td>
                <td><?php echo $kecamatan; ?></td>
                <td><?php echo $kabupaten; ?></td>
                <td><?php echo $provinsi; ?></td>
                <td><?php echo $jenisKelamin; ?></td>
                <td><?php echo $agama; ?></td>
                <td><?php echo $statusKawin; ?></td>
                <td><?php echo $pekerjaan; ?></td>
            </tbody>
        </tr>
    </table>
</body>
</html>