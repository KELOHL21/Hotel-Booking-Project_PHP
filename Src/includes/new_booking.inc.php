<?php

function create_Bookings($hotels){ 

  $hotels_id= $_GET['hotelbooking_id'];

  foreach ($hotels as $hotel => $hotel_array) {
    
    $hotel= $hotel + 1;

    if ($hotel == $hotels_id) {

      echo
      " 
                <div class='accommodation-booking'>
                    <h2>" . $hotel_array['name'] . "</h2>
                    <img src=" . $hotel_array['image'] . " alt=" . $hotel_array['name'] . "class='hotel-img'>
                    <div class='accommodation-data'>
                        <div class='accommodation-info'>
                            <p class='accommodation-location'>" . $hotel_array['location'] . "</p>
                            <p class='accommodation-description'>" . $hotel_array['description'] . "</p>
             ";
    }
  }
}


