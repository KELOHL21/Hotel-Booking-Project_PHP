<?php

$_SESSION['bookings'] = [];
$HotelContents = file_get_contents("../json/hotels.json");
$HotelContents = json_decode($HotelContents, true);



function create_Bookings($hotels)

{ 

  foreach ($hotels as $index => $hotelsArray) {
  
    $hotels_id = $hotelsArray["index"];

    $index = $index + 1;

echo $_SESSION['difference'];

    if ($index == $hotels_id) {

      echo
      " 
                <div class='accommodation-booking'>
                    <h2>" . $hotelsArray['name'] . "</h2>
                    <img src=" . $hotelsArray['image'] . " alt=" . $hotelsArray['name'] . "class='hotel-img'>
                    <div class='accommodation-data'>
                        <div class='accommodation-info'>
                            <p class='accommodation-location'>" . $hotelsArray['location'] . "</p>
                            <p class='accommodation-description'>" . $hotelsArray['description'] . "</p>
             ";
    }
  }
}


