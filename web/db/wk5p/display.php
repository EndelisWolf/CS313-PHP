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
        else if (isset($_POST['update']))
        {
            $duedate = ($_POST['duedate']);
            $noteentry = ($_POST['noteentry']);
            $update = $db->query("UPDATE list SET noteentry='$noteentry' WHERE id= '$note'");
            echo "The selected to do is to be completed on:" . " ". "<strong>" . $duedate . "</strong><br />" . "Here is the to do you have selected:" . "<br /><br />";
                echo $noteentry . "<br /><br />";
                echo "You are currently viewing updated item #" . $note . " on your to do list.";
        }    
    }
    else
        {
            echo 'Search could not be found.';
        }
?>
<br />
<input type="submit" value="Edit Note"><input type="submit" value="Delete Note">
    </div>
</body>

</html>