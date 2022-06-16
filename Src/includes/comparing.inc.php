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

if (isset($_POST['submit'])) {
         
  $date_start = ($_POST['from_date']); //From which date
   
   $date_end = ($_POST['to_date']); //To which date
  
   $date1 = strtotime($date_end); 
   
   $date2 = strtotime($date_start);

   $difference = ($date1-$date2)/60/60/24; // Function to determine day staying

   echo $difference. " days staying";

  echo "<br>";

   echo 'From : '.$date_start;

   echo "<br>";
   
   echo 'To : '.$date_end;

   echo "<br>";

   echo 'R'.$hotels[1]['price'];
   
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





