<?php 
include 'db.php';

session_start();
?>

<!doctype html>
<html>

<head>
    <title>To-Do To-Day Results</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>

<body>
    <div class="generalFormat">
    <?php
    if (isset($_GET['listSelect']))
    {
        $note = $_GET['listSelect'];
        //Due to using options to grab data, id=.note is for selecting the proper number id from the choices availible
        $statement = $db->query("SELECT duedate, noteentry FROM list WHERE id= '$note'");
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo "On" . " ". "<strong>" . $row['duedate'] . "</strong><br />" . "Your todo's for today are:" . "<br />";
            echo $row['noteentry'];
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