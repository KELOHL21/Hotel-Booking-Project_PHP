
<head>
    <link rel="stylesheet" href="../stylesheet/home_stylesheet.css"> 
    <script src="https://kit.fontawesome.com/45c101dd7d.js" crossorigin="anonymous"></script>
</head>

<?php

 //--Navbar--
 include("../includes/nav.inc.php");

require "../includes/new_booking.inc.php";

$_SESSION['bookings'] = [];

$HotelContents = file_get_contents("../json/hotels.json");

$HotelContents = json_decode($HotelContents, true);

?>

<main class="booking-page">

        <?php create_Bookings($HotelContents); ?>

</main>

<footer>

<?php
include("../includes/footer.inc.php")
?>

</footer>