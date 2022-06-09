<?php

require("../Hotel Booking Project/Src/includes/hotel_accom.inc.php");

$_SESSION["hotels_booking"]= [];

$HotelContent=file_get_contents("../Hotel Booking Project/Src/json/hotels.json");

$HotelContent= json_decode($HotelContent,true);

?>

<container class="accomodation">

<div class="hotel_card">

<?php hotel_create($hotels); ?>

</div>

</container>