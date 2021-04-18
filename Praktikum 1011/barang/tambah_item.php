<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Tambah Item</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Tambah item</h2>
    </div>

    <form action="insert.php" method="POST" class="w3-container">
        <label class="w3-text-teal"><b>Nama Barang</b></label>
        <input name="nm_barang" class="w3-input w3-border w3-light-grey" type="text" placeholder="inputkan nama barang">

        <label class="w3-text-teal"><b>Harga</b></label>
        <input name="harga" class="w3-input w3-border w3-light-grey" type="text" placeholder="inputkan harga">

        <label class="w3-text-teal"><b>Stok</b></label>
        <input name="stok" class="w3-input w3-border w3-light-grey" type="text" placeholder="inputkan stok">
        <br>
        <input type="submit" value="Tambah" class="w3-btn w3-blue-grey">
        <a href="../../Praktikum 1011/home.php" class="w3-btn w3-blue-grey">Kembali</a>
    </form>
</body>
</html>

