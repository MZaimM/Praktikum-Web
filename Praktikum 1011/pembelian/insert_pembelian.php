<?php
    session_start();
    include "../koneksi.php";
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    if (isset($_SESSION['username'])) {
        if ($_SESSION['level'] == 'Admin') {
            $sql = "INSERT INTO pembelian (id_barang,tanggal,jumlah) values ('$id_barang','$tanggal','$jumlah')";
            $query = $koneksi->query($sql);
            if ($query == true) {
                echo "<script>
                        alert('Data Barang berhasil dibeli');
                        window.location.href = ('../pembelian/index_pembelian.php');
                    </script>";
            }else {
                echo "<script>
                        alert('Pembelian Gagal');
                        window.location.href = ('form_pembelian_admin.php');
                    </script>";
            }
        }elseif ($_SESSION['level'] == 'Pengguna') {
            $sql = "INSERT INTO penjualan (id_barang,tanggal,jumlah) values ('$id_barang','$tanggal','$jumlah')";
            $query = $koneksi->query($sql);
            if ($query == true) {
                echo "<script>
                        alert('Barang berhasil dibeli');
                        window.location.href = ('../pembelian/pengguna/form_pembelian_pengguna.php');
                    </script>";
            }else {
                echo "<script>
                        alert('Pembelian Gaga;');
                        window.location.href = ('form_pembelian_pengguna.php');
                    </script>";
            }
        }
       
    }
?>