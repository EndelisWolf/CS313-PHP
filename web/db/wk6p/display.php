<?php 
include 'db.php';

session_start();
?>

<!doctype html>
<html>

<head>
    <title>To Do Results</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>

<body class="sereneBGColor">
    <!-- To do: Do research to make edits if you need it in a form or not when tranversing information for an update.-->
    <div class="generalFormat indextext">
        <?php
    if (isset($_GET['listSelect']))
    {
        $note = $_GET['listSelect'];
        //Due to using options to grab data, id=.note is for selecting the proper number id from the choices availible
        $statement = $db->query("SELECT duedate, noteentry FROM list WHERE id= '$note'");
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo "The selected to do is to be completed on:" . " ". "<strong>" . $row['duedate'] . "</strong><br />" . "Here is the to do you have selected:" . "<br /><br />";
            echo $row['noteentry'] . "<br /><br />";
            echo "You are currently viewing item #" . $note . " on your to do list.";
        }
        
    }
    else if (isset($_POST)) {       
        $duedate = ($_POST['duedate']);
        $noteentry = ($_POST['noteentry']);
        $statement = $db->query("INSERT INTO list (duedate, noteentry, usersId, orderId) VALUES ('".$duedate."', ' ".$noteentry."', 1, 1)");/*Hard coded the user id and order id for now*/
        $newid = $db->lastInsertId(); 
        echo "The selected to do is to be completed on:" . " ". "<strong>" . $duedate . "</strong><br />" . "Here is the to do you have selected:" . "<br /><br />";
            echo $noteentry . "<br /><br />";
            echo "You are currently viewing item #" . $newid . " on your to do list.";
    }
   
    else
        {
            echo 'Search could not be found.';
        }
?>
        <br />
        <form action="index.php">
            <input type="submit" value="Edit Note">
        </form>
        
        <form action="index.php">
        <?php
            $db->query("DELETE FROM list WHERE id= '$note'");
        ?>
            <input type="submit" value="Delete Note">
            <!-- Functionality will be learned and implemented with week 6-->
        </form>
    </div>
</body>

</html>