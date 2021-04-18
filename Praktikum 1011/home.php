<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include "koneksi.php";
    $username = $_SESSION['username'];
    $sql = "SELECT * from register where username = '$username'";
    $query = $koneksi->query($sql);
    $data = $query->fetch_array();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Home</title>
</head>
<body>
   <div class="w3-margin">
        <h1 class="w3-center">Selamat Datang</h1>
        <table class="w3-table w3-striped w3-border">
            <tr>
                <td><strong>Username</strong></th>
                <td><?php echo $data['username'] ?></td>
                <td rowspan="2"><a href="barang/menu_item.php" class="button-item">Menu Item</a></td>
            </tr>
            <tr>
                <td><strong>Nama Lengkap</strong></th>
                <td><?php echo $data['namalengkap'] ?></td>
            </tr>
            <tr>
                <td><strong>Email</strong></th>
                <td><?php echo $data['email'] ?></td>
                <?php 
                    if (isset($_SESSION['username'])) {
                        if ($_SESSION['level'] == 'Admin') {
                            echo '<td rowspan="1"><a href="pembelian/index_pembelian.php" class="button-pembelian">Index Pembelian</a></td>';
                        }elseif ($_SESSION['level'] == 'Pengguna') {
                            echo '<td rowspan="2"><a href="pembelian/pengguna/form_pembelian_pengguna.php" class="button-pembelian">Pembelian Barang</a></td>';
                        }
                    }else {
                        echo '<h2>Tolong login dulu</h2>';
                        echo '<a href="form_login.php" class="button-item">Login</a>';
                    }
                ?>
            </tr>
            <tr>
                <td><strong>Level</strong></th>
                <td><?php echo $data['level'] ?></td>
                <?php 
                    if (isset($_SESSION['username'])) {
                        if ($_SESSION['level'] == 'Admin') {
                            echo '<td rowspan="1"><a href="penjualan/index_penjualan.php" class="button-pembelian">Index Penjualan</a></td>';
                        }
                    }else {
                        echo '<h2>Tolong login dulu</h2>';
                        echo '<a href="form_login.php" class="button-item">Login</a>';
                    }
                ?>
            </tr>
            <tr>
                <td colspan="5"><a href="login/form_login.php" class="button-logout">Logout</a></td>
            </tr>
        </table>
   </div>
</body>
</html>