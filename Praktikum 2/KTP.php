<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form E-KTP</title>
</head>
<body>
    <h1>Pendaftaran E-KTP</h1>
    <form action="hasilKTP.php" method="post">
        <table>
            <tr>
                <td>Nomor Induk Kependudukan</td>
                <td>: <input type="text" name="nik" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>: <input type="text" name="tempatLahir" id="">
                    <input type="date" name="tanggalLahir" id="">
                </td>      
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <textarea name="alamat" id="" cols="25" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Rt/Rw</td>
                <td>: Rt <input type="text" name="rt" id="">
                    Rw <input type="text" name="rw" id="">
                </td>
            </tr>
            <tr>
                <td>Kelurahan</td>
                <td>: <input type="text" name="kelurahan" id=""></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>: <input type="text" name="kecamatan" id=""></td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>: <input type="text" name="kab" id=""></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>: <input type="text" name="provinsi" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <input type="radio" name="sex" value="Pria" id="">Pria
                    <input type="radio" name="sex" value="Wanita" id="">Wanita
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: 
                    <select name="agama" id="">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghuchu">Konghuchu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td>:
                    <input type="radio" name="statusKawin" value="Sudah Kawin" id=""> Sudah Kawin 
                    <input type="radio" name="statusKawin" value="Belum Kawin " id=""> Belum Kawin
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: <input type="text" name="pekerjaan" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id=""></td>
            </tr>
        </table>
    </form>
</body>
</html>