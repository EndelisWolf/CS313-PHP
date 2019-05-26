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
    else
        {
            echo 'Search could not be found.';
        }
?>
    </div>
</body>

</html>