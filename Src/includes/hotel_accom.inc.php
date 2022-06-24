<?php

function hotel_create($hotels) {

    foreach ($hotels as $index => $hotel_array) {
        
        $index = $index + 1;

    echo "
    <container class='hotel_card'>

      <h1 class='hotel_name'>
      
      ".$hotel_array['name']."

      </h1>

        <div class='hotel_display'>

           <img src= ". $hotel_array['image'] ." alt= ".  $hotel_array['name'] ." class='hotel_img'>

           <div class='hotel_info'>

               <p class='info'> ". $hotel_array['location'] ." </p>
               <p class='hotel_description'>".$hotel_array['description']."</p>
               <p class='hotel_price'>R ".  $hotel_array['price'] ." per night</p>

                <form class='buttons' action='Src/pages/booking.php' method=get>

                    <input type='hidden' value=" . $hotel_array['id']. " name='hotelbooking_id'>
                    

                    <button class='booking_button'>Book</button>
                
                </form>

                <form class='buttons' action='Src/pages/comparing_page.php' method=get>
                        
                <input type='hidden' value=" . $hotel_array['id']. " name='hotelcomparing_id'>
                
                <input type='hidden' value=" . $hotel_array['stars'] . " name='hotel_stars'>
                
                    <button class='compare_button'>Compare</button>
                    
                </form>    
    
           </div>

        </div>


    </container>

    
    ";

    }
}

