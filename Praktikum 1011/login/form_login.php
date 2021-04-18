<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Login</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Login Form</h2>
    </div><br>

    <form action="aksi_login.php?op=in" method="POST" class="w3-container">
        <label class="w3-text-teal"><b>Username</b></label>
        <input type="text" name="username" id="" class="w3-input w3-border w3-light-grey">

        <label class="w3-text-teal"><b>Password</b></label>
        <input type="password" name="password" class="w3-input w3-border w3-light-grey" type="text">
        <br>

        <input class="w3-btn w3-blue-grey" type="submit" value="Submit"> 
        <a href="../register/form_register.php" class="w3-btn w3-blue-grey">Register</a>

    </form>
</body>
</html>