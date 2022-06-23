<?php

    
       function compare($Hotels){

      $Hotel_id = $_GET['hotelcomparing_id'];
         
        foreach ($Hotels as $index => $index_array)  {

            $index = $index + 1 ;

            $total_price = $_SESSION['difference'] * $index_array['price'] ;

            $price= $index_array['price'];

            if ( $index == $Hotel_id ) {
               
               if ($price == 950 ) {
                  # code...
               }
               echo 
               
               "
               <container class='comparing_details'>
               
               <section class='hotel_info_diplay'>

               <div class='hotel_info'>
               <h1>".$index_array['name']."</h1>
               <p class='compare_descrip'>".$index_array['description']."</p>
               </div>

               <div div class='amentities'>
               <h2>Amenities</h2>
               <p> ".$index_array['amenities']."</p>
               </div>

               </section>

               <div class='final_prices'>

               <p> R ".$index_array['price']." per night</p>
               <p> Total Price R ".$total_price."<p>

               </div>
               

               <button type='button' name='book'> Book </button>
               
               
               </container>

               ";
            
         }else {
            echo"sorry";
         }

         }

       }

                  
            
     
      

      
 // $price_of_stay = $price * $difference;Calculation for the amount of money for the day staying

//echo "R" .$price_of_stay;

/*$search_key = 'toy';
foreach($json as $elem) {
   foreach ( $elem['favourite'] as $key => $val) {
      if ($key == $search_key) {
         echo($elem['name']." - ".$val);
      }
   }
}*/

/*foreach($json as $elem)  {
   echo( $elem['name']. " : " );
   foreach ($elem['cars'] as $car ) {
      echo($car['make']. ", ");
   }
   echo("<br/>");
}*/


// switch ($price) {
  /* case '950  && 1000':
      echo 

      "
      <container class='comparing_info'>
      
      <img src= ". $index['image'] ." alt= ".  $index['name'] ." class='hotel_img'>
      <section class='hotel_display_info'>

      <div class='hotel_info'>
      <input type='hidden' value=" . $index['id']. " name='hotel_index'>
      <h1>".$index['name']."</h1>
      <p class='compare_descrip'>".$index['description']."</p>
      </div>

      <div div class='amentities'>
      <h2>Amenities</h2>
      <p> ".$index['amenities']."</p>
      </div>

      </section>

      <div class='final_prices'>

      <p> R ".$index['price']." per night</p>
      <p> Total Price R ".$total_price."<p>

      </div>
      

      <button type='button' name='book'> Book </button>
      
      
      </container>

      ";
      break;
   
   case '1050 && 1500':
      echo 
   
      "
      <container class='comparing_info'>
      
      <img src= ". $index['image'] ." alt= ".  $index['name'] ." class='hotel_img'>

      <section class='hotel_display_info'>

      <div class='hotel_info'>
      <input type='hidden' value=" . $index['id']. " name='hotel_index'>
      <h1>".$index['name']."</h1>
      <p class='compare_descrip'>".$index['description']."</p>
      </div>

      <div div class='amentities'>
      <h2>Amenities</h2>
      <p> ".$index['amenities']."</p>
      </div>

      </section>

      <div class='final_prices'>

      <p> R ".$index['price']." per night</p>
      <p> Total Price R ".$total_price."<p>

      </div>
      

      <button type='button' name='book'> Book </button>
      
      
      </container>

      ";
      break;*/