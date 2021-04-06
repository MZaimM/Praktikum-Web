<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hasil.php" method="POST">
        <table>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td>Name : </td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><textarea name="alamat" id="" cols="22" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin : </td>
                <td>
                    <select name="sex" id="">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" id="">
                    <input type="reset" name="reset" id=""> 
                </td>
            </tr>
        </table>
    </form>
</body>
</html>