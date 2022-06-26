<?php
       function compare($Hotels){

      // $Hotel_id = $_GET['hotelcomparing_id'];

         $Hotel_stars =$_GET['hotel_stars'];
         
        foreach ($Hotels as $index => $hotel_array)  {

            $index = $index + 1 ;

            $total_price = $_SESSION['difference'] * $hotel_array['price'] ;

            if ( $hotel_array['stars'] == $Hotel_stars ) {

                     $_SESSION['totalPrice']= $total_price;
               
                     echo 
                  
                  "
                  <container class='hotels_details'>
                  
                  <section class='hotel_info_diplay'>

                  <img src= ". $hotel_array['image'] ." alt= ".  $hotel_array['name'] ." class='hotelcompare_img'>

                  <div class='hotel_info'>
                  <h1>".$hotel_array['name']."</h1>
                  <p class='compare_descrip'>".$hotel_array['description']."</p>
                  </div>

                  </section>

                  <div class='compare_second_info'>

                  <div>

                  <h2>Amenities</h2>
                  <p class= 'amenities'> ".$hotel_array['amenities']."</p>

                  </div>

                  <div class='final_prices'>
               
                  <h2> Prices </h2>

                  <p> R ".$hotel_array['price']." per night</p>
                  <p> Total Price R ".$total_price."<p>

                  </div>
                  
                  </div>
                  
                  <form class='buttons' action='./booking.php' method=get>

                  <input type='hidden' value=" . $hotel_array['id']. " name='hotelbooking_id'>

                  <button class='booking_button'>Book</button>
              
                  </form>

                  </container>

                  ";
       }

       }
   }