<?php

echo "Hello World <br>";

$hotels_string = file_get_contents('../json/hotels.json');

$hotels = json_decode($hotels_string,true);

$hotel_price = 1500;

foreach ($hotels as $hotel ) {
  foreach ( $hotel[ 'price' ] as $key => $val ) {
    if ($key <= $hotel_price) {
      echo ($hotel['name']. "price is ".$val);
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





