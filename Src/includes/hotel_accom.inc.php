<?php

function hotel_create($hotels){
    foreach ($hotels as $index => $hotel_array) {
        $index = $index + 1;
    echo "
    <div class='hotel_cards'>

    <img src=" . $hotel_array['image'] . " alt=" . $hotel_array['name'] . " class='hotel_img'>
    <p>" . $hotel_array['location'] . "</p>
    <p>R" . $hotel_array['price'] . " per night</p>
    
    </div>
    ";
    }
}

?>