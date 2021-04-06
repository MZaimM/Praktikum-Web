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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Program Biodata</title>
</head>
<body>
    <div class= "top">
        <p class="nProgram">Biodata</p>
        <p class ="nAuthor">Muhammad Zaim Maulana (19650058)</p>
    </div>
    <div class="pembungkus">
        <div class="header">
        </div>
        <div class = "konten">
            <h2 class="judulArtikel">Biodata anda berhasil disimpan!</h2>
            <form action="hasilBiodata.php" method="post">
                <table>
                    <tr>
                        <td>Nomor Induk Kependudukan</td>
                        <td>: <?php echo $nik; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>: <?php echo $tempatLahir.", ".$tanggalLahir;  ?></td>      
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?php echo $alamat; ?></td>
                    </tr>
                    <tr>
                        <td>Rt/Rw</td>
                        <td>: Rt <?php echo $rt."  "; ?>
                            Rw <?php echo $rw; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kelurahan</td>
                        <td>: <?php echo $kelurahan; ?></td>
                    </tr>
                    <tr>
                        <td>Kecamatan</td>
                        <td>: <?php echo $kecamatan; ?></td>
                    </tr>
                    <tr>
                        <td>Kabupaten/Kota</td>
                        <td>: <?php echo $kabupaten; ?></td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td>: <?php echo $provinsi; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: 
                            <?php echo $jenisKelamin; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: 
                            <?php echo $agama; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Status Perkawinan</td>
                        <td>:
                            <?php echo $statusKawin; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>: <?php echo $pekerjaan; ?></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
</body>
</html>