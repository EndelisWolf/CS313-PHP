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
<h1>Where are we shipping?</h1>
<form method="Form" action="Assign034.php">

<label>First Name:</label>
<input type="text" name="fName">
<label>Last Name:</label>
<input type="text" name="lName">
<label>Stree Address:</label>
<input type="text" name="sAddress">
<label>Apartment Number(if Applicable)</label>
<input type="number" name="aptNum">
<label>City:</label>
<input type="text" name="city">
<label>State:</label>
<input type="text" name="state">
<label>Zipcode:</label>
<input type="number" name="zipCode">
</form>

<button onclick="window.location.href = 'Assign032.php';">Back to 32</button>
   
</body>



</html>