<?php
    if (isset($_POST['submit'])) {
         
          $date_start = ($_POST['from_date']); //From which date
          
          $date_end = ($_POST['to_date']); //To which date
          
          $date1 = strtotime($date_end); 

          $_SESSION['date_start']=$date_start; 

          $date2 = strtotime($date_start);

          $_SESSION['date_end']=$date_end;
      
          $difference = ($date1-$date2)/60/60/24; // Function to determine days staying

          $_SESSION['difference']= $difference;

            if ($difference > 0) { //Number of days cannot be less than 0
          
                    echo 
                    "
                    <div class='display_info'>
                    
                    <h1>Booking Information</h1>

                    <p>Days staying : ".$_SESSION['difference'] ." days</p>

                    <p>From: ".$_SESSION['date_start']."</p>

                    <p>To: ". $_SESSION['date_end']."</p>
                    
                    </div>

                    ";
                } elseif ($difference < 0) {
                    echo "<p class='date_error_message'> You're Date input is incorrect</p>";
                }
        
      }
?>