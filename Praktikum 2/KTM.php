<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hasilKTM.php" method="post">
        <table>
            <tr>
                <td>Nomor Induk Mahasiswa</td>
                <td><input type="text" name="nim" id=""></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatLahir" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggalLahir" id=""></td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>
                    <select name="fakultas" id="">
                        <option value="Ilmu Tarbiyah dan Keguruan">Ilmu Tarbiyah dan Keguruan</option>
                        <option value="Syariah">Syariah</option>
                        <option value="Sains dan Teknologi">Sains dan Teknologi</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Humaniora">Humaniora</option>
                        <option value="Psikologi">Psikologi</option>
                        <option value="Kedokteran dan Ilmu Kesehatan">Kedokteran dan Ilmu Kesehatan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id=""></td>
            </tr>
        </table>
    </form>
</body>
</html>