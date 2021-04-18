<?php
    include "../koneksi.php";
    $nmBarang = $_POST['nm_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "INSERT into barang (nm_barang,harga,stok) values ('$nmBarang','$harga','$stok')";
    $query = $koneksi->query($sql);
    if ($query == true) {
        echo "<script>
                alert('Data Barang berhasil di inputkan');
                window.location.href = ('menu_item.php');
            </script>";
    }else {
        echo "<script>
                alert('Gagal Di inputkan');
                window.location.href = ('tambah_item.php');
            </script>";
    }
?>