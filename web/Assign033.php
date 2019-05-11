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

<form method="Form" action="Assign034.php">
</form>

<button onclick="window.location.href = 'Assign032.php';">Back to 32</button>
   
</body>



</html>