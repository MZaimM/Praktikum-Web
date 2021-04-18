<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Register</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Register</h2>
    </div><br>

    <form action="aksi_register.php" method="post" class="w3-container">
        <label class="w3-text-teal"><b>Username</b></label>
        <input name="username" class="w3-input w3-border w3-light-grey" type="text">

        <label class="w3-text-teal"><b>Password</b></label>
        <input name="password" type="password" class="w3-input w3-border w3-light-grey" type="text">

        <label class="w3-text-teal"><b>Ulangi Password</b></label>
        <input name="ulangipassword" class="w3-input w3-border w3-light-grey" type="password">

        <label class="w3-text-teal"><b>Nama Lengkap</b></label>
        <input name="namalengkap" class="w3-input w3-border w3-light-grey" type="text">

        <label class="w3-text-teal"><b>Email</b></label>
        <input name="email" class="w3-input w3-border w3-light-grey" type="email">

        <label class="w3-text-teal"><b>Level</b></label>
        <select name="level" id="" class="w3-select w3-border">
            <option value="Admin">Admin</option>
            <option value="Pengguna">Pengguna</option>
        </select><br>
        <br>
        <input class="w3-btn w3-blue-grey" type="submit" value="Submit"> 
        <input class="w3-btn w3-blue-grey" type="reset" value="Reset">
        <a href="../login/form_login.php" class="w3-btn w3-blue-grey">Login</a>
    </form>
</body>
</html>