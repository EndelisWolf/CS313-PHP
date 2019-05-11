<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Assignments2</title>
    <link rel="stylesheet" type="text/css" href="Assign031.css">
    <script src="Assign031.js">

    </script>
</head>
<form method="Post" action="Assign033.php">

    <body>
     
        <input type="submit" value="Shipping Information">

</form>

<form method="Post" action="Assign031.php">
    <input type="submit" value="Start Over">
</form>

<?php

    echo "You have bought: <br>";
    echo $_POST["EB"] . " Everything Bagel(s)<br> ";
    echo $_POST["PB"] . " Plain Bagel(s)<br> ";
    echo $_POST["CRB"] . " Cinnamon Raisin Bagel(s)<br> ";
    echo $_POST["AB"] . " Asiago Bagel(s)<br> ";
    echo $_POST["BB"] . " Blueberry Bagel(s)<br> ";
?>
</body>



</html>