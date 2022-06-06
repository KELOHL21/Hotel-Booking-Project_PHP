<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="./Src/Stylesheet/home_stylesheet.css">  

    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
    
     </nav>

    <container class="Header">

    <div class="welcome_message">
    
    <?php
         //convert into session
        $firstname = $_POST["firstName"];
        $email = $_POST["email"];

          echo '<h1>Welcome</h1>'
           .$firstname;
           echo '<br>';
          echo "<p></p>";

     ?>
    </div>

     <div class="info_required">
        <h1 >Information Required</h1>

        <form class="info_form"action="" method="post">

        <label for="days staying">How long will you be staying?</label>
        <input type="number" name="days_stayed">

        <label for="dates">From:</label>
        <input type="date" name="from_date">

        <label for="dates">To:</label>
        <input type="date" name="to_date">
        <input type="submit">

        </form>
     </div>

    </container>


 
</body>
</html>