<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include "../koneksi.php";
    $sql = "SELECT * FROM barang";
    $query = $koneksi->query($sql);
    $no = 1;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../Praktikum 1011/style.css">
    <title>Menu Item</title>
</head>
<body>
    <div class="w3-margin">
        <?php
            if(isset($_SESSION['username'])){
                if ($_SESSION['level'] == 'Admin') {
                    echo '<a href="../home.php">Kembali</a>';
                }
            }
        ?>
        <h1 class="w3-center">Data Barang</h1>
        <table class="w3-table-all w3-centered">
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            <?php while ($data = $query->fetch_array()) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nm_barang'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><?php echo $data['stok'] ?></td>
                </tr>
            <?php endwhile?>
        </table>
        <?php
            if (isset($_SESSION['username'])) {
                if ($_SESSION['level'] == 'Admin') {
                    echo '<a href="tambah_item.php" class="button-item w3-teal">Tambah Item</a>';
                }elseif ($_SESSION['level'] == 'Pengguna') {
                    echo '<a href="../home.php" class="button-item w3-teal">Kembali</a>';
                }
            }else {
                echo '<h2>Tolong login dulu</h2>';
                echo '<a href="form_login.php" class="button-item">Login</a>';
            }
        ?>
    </div>
</body>
</html>