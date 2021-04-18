<!DOCTYPE html>
<html lang="en">
<?php
    include "../koneksi.php";
    $sql = "SELECT nm_barang, jumlah,tanggal FROM penjualan, barang where penjualan.id_barang = barang.id_barang";
    $query = $koneksi->query($sql);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../style.css">
    <title>Index Penjualan</title>
</head>
<body class="w3-margin">
    <h1 class="w3-center">Index Penjualan Barang</h1>
    <table class="w3-table-all w3-centered">
        <tr>
            <th>Nama Barang</th>
            <th>Jumlah Barang Terjual</th>
            <th>Tanggal Terjual</th>
        </tr>
        <?php while($data = $query->fetch_array()) :?>
            <tr>
                <td><?php echo $data['nm_barang'] ?></td>
                <td><?php echo $data['jumlah'] ?></td>
                <td><?php echo $data['tanggal'] ?></td>
            </tr>
        <?php endwhile?>
    </table>
    <a href="../home.php" class="button-item w3-teal">Kembali</a>
</body>
</html>