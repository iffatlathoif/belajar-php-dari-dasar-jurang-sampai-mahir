<?php
session_start();

if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
    header("Location: /session/member.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] = "iffat" && $_POST["password"] == "iffat") {
        $_SESSION["login"] = true;
        $_SESSION["username"] = "eko";
        header("Location: /session/member.php");
    } else {
        $error = "Login Gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Session</title>
</head>

<body>
    <?php if (isset($error) && $error != "") { ?>
        <h2><?= $error ?></h2>
    <?php } ?>
    <h1>Login</h1>
    <form action="/session/login.php" method="post">
        <label for="username">Username:
            <input type="text" name="username" id="username">
        </label>
        <br>
        <label for="password">Password:
            <input type="text" name="password" id="password">
        </label>
        <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>