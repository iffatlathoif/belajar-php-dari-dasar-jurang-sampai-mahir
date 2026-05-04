<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>

<body>
    <h1>Register</h1>
    <form action="post.php" method="post">
        <label for="firstName">First Name :
            <input type="text" name="first_name" id="firstName">
        </label>
        <br>
        <label for="lastName">Last Name :
            <input type="text" name="last_name" id="lastName">
        </label>
        <br>
        <input type="submit" value="Register">
    </form>
</body>

</html>