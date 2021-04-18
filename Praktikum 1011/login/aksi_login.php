<?php
    session_start();
    include "../koneksi.php";
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $op = $_GET['op'];

    if ($op == "in") {
        $sql = "SELECT * FROM register where username = '$username' AND password = '$pwd';";
        $query = $koneksi->query($sql);
        if (mysqli_num_rows($query) == 1) {
            $data = $query->fetch_array();
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            if ($data['level'] == "Admin") {
                header("location:../home.php");
            }elseif ($data['level'] == "Pengguna") {
                header("location:../home.php");
            }else{
                die("Password salah <a href=\"javascript:history.back()\">kembali</a>");
            }
        }
    }else if($op == "out"){
        unset($_SESSION['username']);
        unset($_SESSION['level']);
        header("location:form_login.php");
    }
?>