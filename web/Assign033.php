<!--Checkout-->
<?php

    session_start();

    /*$_SESSION["Everything Bagel"] = $_POST["EB"];
    $_SESSION["Plain Bagel"] = $_POST["PB"];
    $_SESSION["Cinnamon Raisin Bagel"] = $_POST["CRB"];
    $_SESSION["Asiago Bagel"] = $_POST["AB"];
    $_SESSION["Blueberry Bagel"] = $_POST["BB"];*/

    $_SESSION["First Name"] = $_POST["fname"];
    $_SESSION["Last Name"] = $_POST["lname"];
    $_SESSION["Street Address"] = $_POST["sAddress"];
    $_SESSION["City"] = $_POST["city"];
    $_SESSION["State"] = $_POST["state"];
    $_SESSION["Zipcode"] = $_POST["zCode"];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Assignments3</title>
    <link rel="stylesheet" type="text/css" href="Assign031.css">
    <script src="Assign031.js">

    </script>
</head>

<body>
<h1>Where are we shipping?</h1>
<form method="Form" action="Assign034.php">

<label>First Name:</label>
<input type="text" name="fName" maxlength="25" size="15">
<label>Last Name:</label>
<input type="text" name="lName" maxlength="25" size="15"><br>
<label>Street Address:</label>
<input type="text" name="sAddress" maxlength="30" size="25"><br>
<label>City:</label>
<input type="text" name="city"  maxlength="21" size="15">
<label>State:</label>
<input type="text" name="state" maxlength="12" size="15"><br>
<label>Zipcode:</label>
<input type="number" name="zCode" maxlength="6" size="10">

<input type="submit" value="Submit Order">
</form>

<form method="Post" action="Assign032.php">
    <input type="submit" value="View Cart">
</form>
   
</body>



</html>