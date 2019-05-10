<!--Checkout-->
<!--View Cart-->
<?php

    session_start();

    $_SESSION["Everday Bagel"] = $_POST["EB"];
    $_SESSION["Plain Bagel"] = $_POST["PB"];
    $_SESSION["Cinnamon Raisin Bagel"] = $_POST["CRB"];
    $_SESSION["Asiago Bagel"] = $_POST["AB"];
    $_SESSION["Blueberry Bagel"] = $_POST["BB"];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Assignments</title>
    <link rel="stylesheet" type="text/css" href="Assign031.css">
    <script src="Assign031.js">

    </script>
</head>

<body>

CHECKCHECKCHECK

    <?php

    echo "You have bought: <br>";
    echo $_POST["EB"] . " <p>Everything Bagel(s)</p><br> ";
    echo $_POST["PB"] . " <p>Plain Bagel(s)</p><br> ";
    echo $_POST["CRB"] . " <p>Cinnamon Raisin Bagel(s)</p><br> ";
    echo $_POST["AB"] . " <p>Asiago Bagel(s)</p><br> ";
    echo $_POST["BB"] . " <p>Blueberry Bagel(s)</p><br> ";

    /*echo "You have bought: <br>";
    echo " Everything Bagel: " . $_POST["EB"] . "<br>";
    echo " Plain Bagel: " . $_POST["PB"] . ;
    echo " Cinnamon Raisin Bage: " . $_POST["CRB"] . "<br>";
    echo " Asiago Bagel: " . $_POST["AB"] . "<br>";
    echo " Blueberry Bagel: " . $_POST["BB"] . "<br>";*/

   // echo var_dump($_POST);

?>
</body>



</html>