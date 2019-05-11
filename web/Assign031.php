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
    <meta charset="utf-8">
    <title>Assignments1</title>
    <link rel="stylesheet" type="text/css" href="Assign031.css">
    <script src="Assign031.js">

    </script>
</head>

<form method="Post" action="Assign032.php">

    <body>
        <h1>Everyday Bagels</h1>
        <br>
        <h3>What would you like to buy?</h3>
        <br>
        <table style="width: 40%">
            <tr>
                <th>Our Bagels</th>
                <th>Bagel Options</th>
                <th>Price Per Bagel</th>
                <th>Cost</th>
            </tr>
            <tr>
                <th>Everything Bagel</th>
                <th>$2.00</th>
                <th><select name="EB" id="selectItem1" onchange="quantity1()">
                        <!--Reference for help: https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_select_value2 -->
                        <!-- For refernece for on change: https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_onchange -->
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></th>
                <th>
                    <p id="total1"></p>
                </th>
            </tr>
            <tr>
                <th>Plain Bagel</th>
                <th>$1.00</th>
                <th><select name="PB" id="selectItem2" onchange="quantity2()">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></th>
                <th>
                    <p id="total2"></p>
                </th>
            </tr>
            <tr>
                <th>Cinnamon Raisin Bagel</th>
                <th>$1.25</th>
                <th><select name="CRB" id="selectItem3" onchange="quantity3()">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></th>
                <th>
                    <p id="total3"></p>
                </th>
            </tr>
            <tr>
                <th>Asiago Bagel</th>
                <th>$1.75</th>
                <th><select name="AB" id="selectItem4" onchange="quantity4()">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></th>
                <th>
                    <p id="total4"></p>
                </th>
            </tr>
            <tr>
                <th>Blueberry Bagel</th>
                <th>$1.50</th>
                <th><select name="BB" id="selectItem5" onchange="quantity5()">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></th>
                <th>
                    <p id="total5"></p>
                </th>
            </tr>



        </table>

        <input type="submit" value="allBagel">

</form>
</body>

</html>