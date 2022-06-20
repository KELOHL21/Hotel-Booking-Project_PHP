<?php
         
       function compare($hotel){

        foreach ($hotel as $index)  {

            $price= $index['price'];

            if ($price >= 900 && $price <= 1000) {
         
               echo 
               
               "
               <container class='comparing_details'>
               
               <section class='hotel_info_diplay'>

               <div class='hotel_info'>
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
               <p> Total Price R ".$index['price']."<p>

               </div>
               

               <button type='button' name='book'> Book </button>
               
               
               </container>

               ";

            }if ($price == 00 && $price ===1500) {
               echo "Hello world";
            }{

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
