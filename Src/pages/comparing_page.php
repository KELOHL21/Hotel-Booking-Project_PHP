<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels Compare</title>
    <link rel="stylesheet" href="../stylesheet/home_stylesheet.css">
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
</head>

<body>

    
    <?php

    //-----Navbar----

    include("../includes/nav.inc.php");

  
    if ($_SESSION['difference'] > 0) {
    
      echo 
    "
    <br>

    <container class='clientinfo_display'>
    
    <h1>Trip Info</h1>

    <div class='trip_info'>

    <p>Days staying : ".$_SESSION['difference']." Days </p>

    <div class ='date_display'>
    
    <p> From : ".$_SESSION['date_start']." </p>
    
    <p>To :".$_SESSION['date_end']."</p>
    </div>

    </div>
    
    </container>";

  } elseif($_SESSION['difference'] < 0) { //Need to not display anything *Fix
    
    echo 
    " <br> <p class='requiredinfo_display'>Please fill in the correct dates</p>";
  }
    
    ?>

    <main >

    <?php 
    
      require('../includes/comparing.inc.php');

      $_SESSION['hotels_booking']= [];
         
      $HotelContent = file_get_contents('../json/hotels.json');
      
      $HotelContent = json_decode($HotelContent,true);

      compare($HotelContent);

    ?>

    </main>

</body>


<footer>

<?php
include("../includes/footer.inc.php")
?>

</footer>


</html>