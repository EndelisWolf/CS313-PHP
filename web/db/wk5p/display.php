<?php 
include 'db.php';

session_start();
?>

<!doctype html>
<html>

<head>
    <title>To-Do To-Day Results</title>
</head>

<body>
    <?php
    if (isset($_GET['listSelect']))
    {
        $note = $_GET['listSelect'];
        /*$sql = 'SELECT dueDate, noteEntry FROM list WHERE id='.$note;
        echo ($sql);*/
        //Due to using options to grab data, id=.note is for selecting the proper number id from the choices availible
        $statement = $db->query("SELECT duedate, noteentry FROM list WHERE id= '$note'");
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo $row['duedate'] . " " . $row['noteentry'];
        }
        
    }
    else
        {
            echo 'Search could not be found.';
        }
?>
</body>

</html>