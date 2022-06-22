<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels Compare</title>
    <link rel="stylesheet" href="{{asset('../stylesheet/home_stylesheet.css'}}">
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
</head>
<body>

    <!--Navbar-->
    <?php
    include("../includes/nav.inc.php");

    echo "<br>";
    ?>

<h1>Hotels</h1>

<div class="requiredinfo_display">

<h1>Trip Info</h1>

<p>Days staying : <?php echo $_SESSION['difference']?> Days </p>

<p> From :<?php echo $_SESSION['date_start']?> </p>

<p>To : <?php echo $_SESSION['date_end']?> </p>


</div>

<main>

    <?php 
    
      require('../includes/comparing.inc.php');

      $_SESSION['hotels_booking']= [];
         
      $HotelContent = file_get_contents('../json/hotels.json');
      
      $HotelContent = json_decode($HotelContent,true);

      compare($HotelContent);

    ?>


</main>

<footer>

<?php
include("../includes/footer.inc.php")
?>

</footer>

</body>
</html>