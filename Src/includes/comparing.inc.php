<?php

function compare($hotel) {

    foreach ($hotel as $index => $hotel_property) {
        
      $index = $index + 1;

        echo
        
        "

        <h1>
        ".$hotel_property['name']."
        </h1>

        <p class='hotel_price'>R per night</p>
        "

      ;
      
      }

    }   


