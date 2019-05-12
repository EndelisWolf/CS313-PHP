<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<title>Confirmation</title>
<link rel="stylesheet" type="text/css" href="Assign03.css">

<body>
    <h1>Order has been processed!</h1>
    
    <?php
    echo "You have successfully ordered:<br>";
    echo $_SESSION["Everything Bagel"] . " Everything Bagel(s)<br> ";
    echo $_SESSION["Plain Bagel"] . " Plain Bagel(s)<br> ";
    echo $_SESSION["Cinnamon Raisin Bagel"] . " Cinnamon Raisin Bagel(s)<br> ";
    echo $_SESSION["Asiago Bagel"] . " Asiago Bagel(s)<br> ";
    echo $_SESSION["Blueberry Bagel"] . " Blueberry Bagel(s)<br> ";
    echo "<br>";
    echo "Your order will be shipped to:<br>";
    echo $_POST["fName"] . " " . $_POST["lName"] . "<br>";
    echo $_POST["email"] . "<br>";
    echo $_POST["sAddress"] . "<br>";
    echo $_POST["city"] . ", " . $_POST["state"] . " " . $_POST["zCode"];
?>
    <br>
    <br>
    <h2>We are sorry to inform you that our payment service is down.</h2>
    <br>
    <h3>Due to this failure on our behalf, your order is free.</h3>

</body>

</html>