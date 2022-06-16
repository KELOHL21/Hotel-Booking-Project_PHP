<?php
session_start();
$logo_name = "Hotel Haven";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $logo_name ?></title>
    <link rel="stylesheet" href="./Src/stylesheet/home_stylesheet.css">
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--Navbar-->
    <?php
    include("./Src/includes/nav.inc.php")
    ?>
    
    <!--Header-->
    <container class="intro">

        <div class="welcome_message">

            <?php
            
            //convert into session
            $firstname = $_POST["firstName"];
            $email = $_POST["email"];

            echo '<h1>Welcome</h1>' . $firstname;
            echo '<br>';
            echo "<p>Cape Town the MotherCity. Its vibrant colourful and adventurous.Everywhere you go you'll be amazed.
              Choose from a variety of hotels to enjoy your stay.As they say in Cape 'Heres iet lekker'. </p>";

            ?>
        </div>

        <div class="info_required">

          <h1>Information Required</h1>

            <form class="info_form" action="./Homepage.php" method="post">

                <div class="data">
                    <label for="dates">From:</label>
                    <input type="date" value="<?php echo date("Y-m-d"); ?>" name="from_date">
                </div>

                <div class="data">
                    <label for="dates">To:</label>
                    <input type="date" value="<?php echo date("Y-m-d"); ?>" name="to_date">
                </div>

                <input type="submit" name="submit">

            
            </form>


        </div>

    </container>

    <?php
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
             }
                ?>

    <main>
    
    <?php
         require("./Src/includes/hotel_accom.inc.php");
         
         $_SESSION['hotels_booking']= [];
         
         $HotelContent = file_get_contents('./Src/json/hotels.json');
         
         $HotelContent = json_decode($HotelContent,true);
     
         hotel_create($HotelContent);
     
     ?>
     

    </main>

</body>
 
<footer>

<?php
include("./Src/includes/footer.inc.php")
?>

</footer>

</html>