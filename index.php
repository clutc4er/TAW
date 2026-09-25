<?php
session_start();
$login = $_POST["login"];
$pass = $_POST["pass"];
if (isset($login) && isset($pass)) {
if ($login = "admin" && $pass = "tajne123") {
    $_SESSION["user"] = "admin";
    $_SESSION["pass"] = "tajne123";
}
}
if (isset($_SESSION["user"])) {
    header("location: panel.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input placeholder="login" name="login" id="login">
        <input placeholder="password" id="pass">
        <button type="submit" id="confirm">confirm</button>
    </form>
</body>

</html>