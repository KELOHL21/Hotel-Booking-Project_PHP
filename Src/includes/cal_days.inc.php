<?php
    
    $firstname = $_POST['firstName'];
        
    $email = $_POST['email'];
    
    $date_start = ($_POST['from_date']); //From which date
    
    $date_end = ($_POST['to_date']); //To which date
    
    $date1 = strtotime($date_end);  //changes the date variabe from a string to an int so the number of days stayin can be calulated
    
    $_SESSION['date_start']=$date_start; 
    
    $date2 = strtotime($date_start); //changes the date variabe from a string to an int so the number of days stayin can be calulated
    
    $_SESSION['date_end']=$date_end;
    
    $difference = ($date1-$date2)/60/60/24; // Function to determine days staying
    
    $_SESSION['difference']= $difference;

if (isset($_POST['submit']) && $difference<0) { 
  //Figure out how to not allow submission if one of the fields arent filled out

      echo 
                    "
                    <div class='display_info'>
                    
                    <h1>Booking Information</h1>

                    <p>Days staying : ".$_SESSION['difference'] ." days</p>

                    <p>From: ".$_SESSION['date_start']."</p>

                    <p>To: ". $_SESSION['date_end']."</p>
                    
                    </div>

                    ";
      }else{
            echo" <p> Please fill in the form </p>";
          }
    
      
?>