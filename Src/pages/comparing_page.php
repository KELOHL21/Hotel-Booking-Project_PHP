<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels Compare</title>
    <link rel="stylesheet" href="../stylesheet/home_stylesheet.css">
    <script src="https://kit.fontawesome.com/e4ad388285.js" crossorigin="anonymous"></script>
</head>
<body>

    <!--Navbar-->
    <?php
    include("../includes/nav.inc.php");

    echo "<br>";

    ?>

<h1>Day STAYING</h1>

<?php require('../includes/comparing.inc.php')
?>



<footer>

<?php
include("../includes/footer.inc.php")
?>

</footer>

</body>
</html>