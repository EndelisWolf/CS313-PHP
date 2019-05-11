<!--Confirmation Page-->
<?php

    session_start();
    
    $_SESSION["Everything Bagel"] = $_POST["EB"];
    $_SESSION["Plain Bagel"] = $_POST["PB"];
    $_SESSION["Cinnamon Raisin Bagel"] = $_POST["CRB"];
    $_SESSION["Asiago Bagel"] = $_POST["AB"];
    $_SESSION["Blueberry Bagel"] = $_POST["BB"];

    $_SESSION["First Name"] = $_POST["fname"];
    $_SESSION["Last Name"] = $_POST["lname"];
    $_SESSION["Street Address"] = $_POST["sAddress"];
    $_SESSION["City"] = $_POST["city"];
    $_SESSION["State"] = $_POST["state"];
    $_SESSION["Zipcode"] = $_POST["zCode"];

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
    echo $_POST["EB"] . " Everything Bagel(s)<br> ";
    echo $_POST["PB"] . " Plain Bagel(s)<br> ";
    echo $_POST["CRB"] . " Cinnamon Raisin Bagel(s)<br> ";
    echo $_POST["AB"] . " Asiago Bagel(s)<br> ";
    echo $_POST["BB"] . " Blueberry Bagel(s)<br> ";
    echo "<br>";
    echo "Your order will be shipped to:<br>";
    echo $_POST["fName"]/* . " " . $_POST["lName"] . "<br>"*/;
    echo $_POST["sAddress"] . "<br>";
    echo $_POST["city"] . " " . $_POST["state"] . "<br>";
    echo $_POST["zCode"];


?>

</html>