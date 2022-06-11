<?php

function hotel_create($hotels) {

    foreach ($hotels as $index => $hotel_array) {
        
        $index = $index + 1;
    echo "
      <div class='hotel_cards'>

      <h1>
      ".$hotel_array['name']."
      </h1>

      <container class='hotel_display'>

        <img src= ". $hotel_array['image'] ." alt= ".  $hotel_array['name'] ." class='hotel_img'>

      <div class='hotel_info'>
          <p> ". $hotel_array['location'] ." </p>
          <p>R ".  $hotel_array['price'] ." per night</p>
   
        <div class='button'>
        
            <button type='button' class='booking_button'>Book</button>
    
            <button type='button' class='compare_button'>Compare</button>
    
            </div>

        </div>

      </div>

      </container>
    ";

    }
}

