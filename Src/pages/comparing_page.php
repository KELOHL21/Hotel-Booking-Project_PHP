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

    <!--Navbar-->
    <?php
    include("../includes/nav.inc.php");

    echo "<br>";

    ?>

<h1>Day STAYING</h1>



<?php
         require('../includes/comparing.inc.php');

         $_SESSION['hotels_booking']= [];
         
         $HotelContent = file_get_contents('../json/hotels.json');
         
         $HotelContent = json_decode($HotelContent,true);

         $price= $HotelContent[0]["price"]; //Getting price of index in between []

         echo "<br>";

     if (isset($_POST['submit'])) {
         
        $date_start = ($_POST['from_date']);
         
         $date_end = ($_POST['to_date']);
        
         $date1 = strtotime($date_end); 
         
         $date2 = strtotime($date_start);

         $difference = ($date1-$date2)/60/60/24; // Function to determine day staying
     }   

     $price_of_stay = $price * $difference; // Calculation for the amount of money for the day staying
     
     echo $price_of_stay;
   
?>



<?

compare($HotelContent); 

echo "hello world"

?>



<footer>

<?php
include("../includes/footer.inc.php")
?>

</footer>

</body>
</html>