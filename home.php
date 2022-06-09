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

         <?php
         include("./src/includes/nav.inc.php")
         ?>

    <container class="intro">

    <div class="welcome_message">

    <?php
         //convert into session
           $firstname = $_POST["firstName"];
           $email = $_POST["email"];

          echo '<h1>Welcome</h1>'.$firstname;
          echo '<br>';
          echo "<p>Cape Town the MotherCity. Its vibrant colourful and adventurous.Everywhere you go you'll be amazed.
          Choose from a variety of hotels to enjoy your stay.As they say in Cape 'Heres iet lekker'. </p>";

     ?>
    </div>

     <div class="info_required">
        <h1 >Information Required</h1>

        <form class="info_form" action="./home.php" method="post">

        <div class="data">
        <label for="days staying">Days staying?</label>
        <input type="number" name="days_stayed">
        </div>

        <div class="data">
        <label for="dates">From:</label>
        <input type="date" name="from_date">
        </div>

        <div class="data">
        <label for="dates">To:</label>
        <input type="date" name="to_date">
        </div>

        <input type="submit">

        </form>
     </div>

    </container>

</body>
</html>