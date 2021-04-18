<!DOCTYPE html>
<html lang="en">
<?php
    include "../../koneksi.php";
    $sql_select = "SELECT * FROM barang";
    $query = $koneksi->query($sql_select);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Pembelian</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Pembelian Barang Pengguna</h2>
    </div><br>

    <form action="../insert_pembelian.php" method="POST" class="w3-container">
        <label class="w3-text-teal"><b>Nama Barang</b></label><br>
        <select name="id_barang" id="" class="w3-select w3-border">
            <?php while($data = $query->fetch_array()) :?>
                <option value="<?php echo $data['id_barang'];?>"><?php echo $data['nm_barang']." (Rp".$data['harga']."/pcs)"; ?></option>
            <?php endwhile?>
        </select><br>
        <label class="w3-text-teal"><b>Jumlah Barang</b></label>
        <input name="jumlah" class="w3-input w3-border w3-light-grey" type="text" placeholder="inputkan jumlah barang yang dibeli">
        
        <label class="w3-text-teal"><b>Tanggal Pembelian</b></label>
        <input name="tanggal" class="w3-input w3-border w3-light-grey" type="date">
        <br>
        <input type="submit" value="Beli" class="w3-btn w3-blue-grey">
        <a href="../../home.php" class="w3-btn w3-blue-grey">Kembali</a>
    </form>
</body>
</html>