<?php

function hotel_create($hotels) {

    foreach ($hotels as $index => $hotel_array) {
        
        $index = $index + 1;

    echo "
    <div class='hotel_cards'>

      <h1 class='hotel_name'>
      ".$hotel_array['name']."
      </h1>

        <container class='hotel_display'>

           <img src= ". $hotel_array['image'] ." alt= ".  $hotel_array['name'] ." class='hotel_img'>

           <div class='hotel_info'>

               <p class='info'> ". $hotel_array['location'] ." </p>
               <p class='hotel_description'>".$hotel_array['description']."</p>
               <p class='hotel_price'>R ".  $hotel_array['price'] ." per night</p>

                <div class='buttons'>

                    <button type='button' class='booking_button'><a class='links' href='Src/pages/booking_page.php'>Book</a></button>
                
                    <button type='button' class='compare_button'><a  class='links' href='Src/pages/comparing_page.php'>Compare</a></button>
                    
                </div>    
    
           </div>

        </container>


    </div>

    
    ";

    }
}

