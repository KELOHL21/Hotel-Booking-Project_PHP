<?php

function create_Bookings($hotels){ 

  $hotels_id= $_GET['hotelbooking_id'];

  foreach ($hotels as $hotel => $hotel_array) {
    
    $hotel= $hotel + 1;

    if ($hotel == $hotels_id) {

      echo
      " 
                <br>
                <container class='accommodation-booking'> //Flex column

                    <h1>" . $hotel_array['name'] . "</h1>

                    <img src=" . $hotel_array['image'] . " alt=" . $hotel_array['name'] . "class='hotel-img'>
                    <p class='accommodation-location'>" . $hotel_array['location'] . "</p>

                    

                      <div class='accommodation-info'>  //Flex row
                            
                            <p class='accommodation-description'>" . $hotel_array['description'] . "</p>

                            <p class='accommodation-description'>" . $hotel_array['amenities'] . "</p>

                        </div>
                    
                        <section class='trip-info'> //Flex row

                          <p>Days staying : ".$_SESSION['difference']." Days </p>

                        <div class ='prices'>

                          <p> R ".$hotel_array['price']." per night</p>
  
                          <p> In total is R ".$_SESSION['totalPrice']."</p>

                        </div>

                        <div class= 'dates'>

                          <p> From : ".$_SESSION['date_start']." </p>
    
                          <p>To :".$_SESSION['date_end']."</p>

                        </div>

                        </section>

                        <form class='buttons_booking' action='.H/Homepage.php' method=get>
    
                        <button class='booking_button'>Cancel</button>
                    
                        </form>

                        <form class='buttons_booking' action='Src/pages/booking.php' method=get>
    
                        <button class='booking_button'>Book</button>
                    
                        </form>

                </container>
             ";
    }
  }
}


