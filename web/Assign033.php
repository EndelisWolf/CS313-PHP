<?php
    session_start();
?>
<?php
//referenced to team activity to understand this section and repair it
    $fName = '';
    $lName = '';
    $email = '';
    $sAddress = '';
    $city = '';
    $state = '';
    $zCode = '';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Assignments3</title>
    <link rel="stylesheet" type="text/css" href="Assign031.css">

    
</head>

<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "Post") {
        $fName = htmlspecialchars($_POST['fName']);
        $lName = htmlspecialchars($_POST['lName']);
        $email = htmlspecialchars($_POST['email']);
        $sAddress = htmlspecialchars($_POST['sAddress']);
        $city = htmlspecialchars($_POST['city']);
        $state = htmlspecialchars($_POST['state']);
        $zCode = htmlspecialchars($_POST['zCode']);
    }
    ?>

    <h1>Where are we shipping?</h1>
    <form method="Post" action="Assign034.php">

        <label>First Name:</label>
        <input type="text" name="fName" maxlength="25" size="15">
        <label>Last Name:</label>
        <input type="text" name="lName" maxlength="25" size="15"><br>
        <label>Email:</label>
        <input type="text" name="email" maxlength="25" size="15"><br>
        <label>Street Address:</label>
        <input type="text" name="sAddress" maxlength="30" size="25"><br>
        <label>City:</label>
        <input type="text" name="city" maxlength="21" size="15">
        <label>State:</label>
        <input type="text" name="state" maxlength="12" size="15"><br>
        <label>Zipcode:</label>
        <input type="number" name="zCode" maxlength="6" size="10">

        <input type="submit" value="Submit Order">

        <a href="Assign32.php">
            <input type="button" value="Back to Cart">
        </a>
    </form>

</body>



</html>