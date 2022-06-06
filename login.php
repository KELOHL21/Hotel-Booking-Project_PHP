<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Src/Stylesheet/stylesheet.css">
</head>

<body>
    <container class="login">

        <h1>Heaven Haven</h1>
        <form action="home.php" method="post">

            <label for="firstname">Your Name</label>
            <input type="text" name="firstName">

            <label for="email">Email Address</label>
            <input type="email" name="email">

            <input type="submit">

        </form>

    </container>
</body>

</html>