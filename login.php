<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Src//stylesheet/stylesheet_login.css">
</head>

<body>

    <container class="login">

        <div class="logo_message">

        <h1>Welcome to Hotel Haven </h1>
        
        <img class="logo" src="./Src/images/Hotel Logo.png">

        </div>

        
        <div class="login_info">
            
                <?php
                if (isset($_POST['submit_btn'])) {
    
                    $firstname = isset($_POST["firstName"]);
                    
                    $_SESSION['firstname']= $firstname;

                    $email = $_POST["email"];
                    
                }

                ?>
                <form class="log_form" action="./Homepage.php" method="post">

                    <input type="text" class="input_display" name="firstName" placeholder="Your Name">

                    <input type="email" class="input_display" name="email" placeholder="Your Email Address">

                    <button class="login_submitbtn" name="submit_btn">Submit</button>

                </form>

        </div>

    </container>

</body>

</html>

