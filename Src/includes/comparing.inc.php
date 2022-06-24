<?php
       function compare($Hotels){

      $Hotel_id = $_GET['hotelcomparing_id'];
         
        foreach ($Hotels as $index => $hotel_array)  {

            $index = $index + 1 ;

            $total_price = $_SESSION['difference'] * $hotel_array['price'] ;

            $price= $hotel_array['price'];

            if ( $index == $Hotel_id ) {
               
               if ($price == 950  || $price == 1000 ) {
                           echo 
                        
                        "
                        <container class='comparing_details'>
                        
                        <section class='hotel_info_diplay'>

                        <div class='hotel_info'>
                        <h1>".$hotel_array['name']."</h1>
                        <p class='compare_descrip'>".$hotel_array['description']."</p>
                        </div>

                        <div div class='amentities'>
                        <h2>Amenities</h2>
                        <p> ".$$hotel_array['amenities']."</p>
                        </div>

                        </section>

                        <div class='final_prices'>

                        <p> R ".$hotel_array['price']." per night</p>
                        <p> Total Price R ".$total_price."<p>

                        </div>
                        

                        <button type='button' name='book'> Book </button>
                        
                        
                        </container>

                        ";
                  }
                     else {

                        echo"sorry";

                       }
               
            }   
         

         }

         $_SESSION['total_price']= $total_price;

       }

                  
            
     
      

