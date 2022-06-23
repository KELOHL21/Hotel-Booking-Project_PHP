
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Haven</title>
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

            <h1>Welcome <?php  echo  isset($_POST['firstName'])?> </h1>

            <p>Cape Town the Mother City. Its vibrant colourful and adventurous.Everywhere you go you'll be amazed.Choose from a variety of hotels to enjoy your stay.As they say in the Cape 'Heres iet lekker'. </p>

        </div>

        <div class="info_required">

          <h1>Information Required</h1>

            <form class="info_form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >

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

            <?php
                $request = $_SERVER['REQUEST_URI'];
                $basepath = "Hotel Booking Project/";
                $request = str_replace($basepath, "", $request);
                $request = strtok($request, '?');
                switch ($request) {
                    case '/':
                        require __DIR__ . '/Src/includes/hotel_accom.inc.php';
                        break;
                    case '/home':
                        require __DIR__ . '/Homepage.php';
                        break;
                    case '/comparing_page':
                        require __DIR__ . '/Src/pages/comparing_page.php';
                        break;    
                    case '/bookings':
                        require __DIR__ . '/Src/pages/booking.php';
                        break;
                };

              include('./Src/includes/cal_days.inc.php')
             ?>
 
        </div>

    </container>

 

    <main>
    
    <?php
         require("./Src/includes/hotel_accom.inc.php");
         
         $_SESSION['hotels_booking']= [];
         
         $HotelContent = file_get_contents('./Src/json/hotels.json');
         
         $HotelContent = json_decode($HotelContent,true);
     
         hotel_create($HotelContent);

         echo $_SESSION['total_price'];
     
     ?>
     

    </main>

</body>
 
<footer>

<?php
include("./Src/includes/footer.inc.php")
?>

</footer>

</html>