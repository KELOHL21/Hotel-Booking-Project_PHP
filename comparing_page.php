<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels Compare</title>
    <link rel="stylesheet" href="./Src/stylehsheet/home_stylesheet.css">
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
</head>
<body>

     <!--Navbar-->
     <?php
    include("../Hotel Booking Project/Src/includes/nav.inc.php")
    ?>

<h1>Day STAYING</h1>

<?php
     if (isset($_POST['submit'])) {
         
        $date_start = ($_POST['from_date']);
         
         $date_end = ($_POST['to_date']);
        
         $date1 = strtotime($date_end); 
         
         $date2 = strtotime($date_start);

         $difference = ($date1-$date2)/60/60/24;

         echo $difference. " day";

     }   
     
     function hotel_create($hotels) {

        foreach ($hotels as $index => $hotel_array) {
            
            $index = $index + 1;

     echo "<p> R ".  $hotel_array['price'] ." per night </p> ";

        }

    }
     

?>
</body>
</html>