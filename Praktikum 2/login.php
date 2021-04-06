<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<style>
    body{
        text-align: center;
    }
</style>
<body>
    <form action="hasilLogin.php" method="post">
        <p><strong>Username</strong></p>
        <input type="text" name="username">
        <p><strong>Password</strong></p>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>