<?php
    session_start();

    $_SESSION["Everything Bagel"] = $_POST["EB"];
    $_SESSION["Plain Bagel"] = $_POST["PB"];
    $_SESSION["Cinnamon Raisin Bagel"] = $_POST["CRB"];
    $_SESSION["Asiago Bagel"] = $_POST["AB"];
    $_SESSION["Blueberry Bagel"] = $_POST["BB"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="Assign031.css">

</head>
<?php

    echo "You have bought: <br>";
    echo $_SESSION["Everything Bagel"] . " Everything Bagel(s)<br> ";
    echo $_POST["PB"] . " Plain Bagel(s)<br> ";
    echo $_POST["CRB"] . " Cinnamon Raisin Bagel(s)<br> ";
    echo $_POST["AB"] . " Asiago Bagel(s)<br> ";
    echo $_POST["BB"] . " Blueberry Bagel(s)<br> ";

    echo var_dump($_SESSION);
?>

<a href="Assign033.php">
    <input type="submit" value="Shipping Information">
</a>


<a href="Assign031.php">
    <input type="submit" value="Start Over">
</a>
</body>



</html>