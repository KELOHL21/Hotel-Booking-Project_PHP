<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Src/Stylesheet/stylesheet_login.css">
</head>

<body>
    <container class="login">

        <div class="login_info">
            
        <h1>Sign in </h1>

        <form class="log_form" action="Homepage.php" method="post">

            <label for="firstname">Your Name</label>
            <input type="text" name="firstName">

            <label for="email">Email Address</label>
            <input type="email" name="email">

            <input type="submit">

        </form>
        </div>

        <div class="logo_img">

          <h1>LOGO</h1>

        </div>

    </container>

</body>

</html>

