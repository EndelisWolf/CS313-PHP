<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <title>Assignments4</title>
    <link rel="stylesheet" type="text/css" href="Assign031.css">
    <script src="Assign031.js">

    </script>

<body>
    <h1>Order has been processed!</h1>
</body>

<br>
<br>

<?php

    echo "You have successfully ordered:<br>";
    echo $_SESSION["EB"] . " Everything Bagel(s)<br> ";
    echo $_POST["PB"] . " Plain Bagel(s)<br> ";
    echo $_POST["CRB"] . " Cinnamon Raisin Bagel(s)<br> ";
    echo $_POST["AB"] . " Asiago Bagel(s)<br> ";
    echo $_POST["BB"] . " Blueberry Bagel(s)<br> ";
    echo "<br>";
    echo "Your order will be shipped to:<br>";
    echo $_POST["fName"] . " " . $_POST["lName"] . "<br>";
    echo $_POST["sAddress"] . "<br>";
    echo $_POST["city"] . ", " . $_POST["state"] . " " . $_POST["zCode"];


?>

</html>