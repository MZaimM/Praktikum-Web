<!DOCTYPE html>
<html lang="en">
<?php
    include "../koneksi.php";
    $sql = "SELECT nm_barang, jumlah,tanggal FROM pembelian, barang where pembelian.id_barang = barang.id_barang";
    $query = $koneksi->query($sql);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../Praktikum 1011/style.css">
    <title>Index Pembelian</title>
</head>
<body>
    <div class="w3-margin">
        <a href="../home.php">Kembali</a>
        <h1 class="w3-center">Index Pembelian Barang</h1>
        <table class="w3-table-all w3-centered">
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah Pembelian Barang</th>
                <th>Tanggal Pembelian</th>
            </tr>
            <?php while($data = $query->fetch_array()) :?>
                <tr>
                    <td><?php echo $data['nm_barang'] ?></td>
                    <td><?php echo $data['jumlah'] ?></td>
                    <td><?php echo $data['tanggal'] ?></td>
                </tr>
            <?php endwhile?>
        </table>
        <a href="admin/form_pembelian_admin.php" class="button-item w3-teal">Beli Barang</a>
    </div>
</body>
</html>