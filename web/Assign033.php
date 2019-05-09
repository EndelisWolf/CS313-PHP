<!--Checkout-->
<?php

    session_start();

    $_SESSION["Everday Bagel"] = $_POST["EB"];
    $_SESSION["Plain Bagel"] = $_POST["PB"];
    $_SESSION["Cinnamon Raisin Bagel"] = $_POST["CRB"];
    $_SESSION["Asiago Bagel"] = $_POST["AB"];
    $_SESSION["Blueberry Bagel"] = $_POST["BB"];
?>