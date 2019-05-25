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
    if (isset($_POST['listSelect']))
    {
        $note = $_POST['listSelect'];
        /*$sql = 'SELECT dueDate, noteEntry FROM list WHERE id='.$note;
        echo ($sql);*/
        //Due to using options to grab data, id=.note is for selecting the proper number id from the choices availible
        $statement = $db->query('SELECT dueDate, noteEntry FROM list WHERE id='.$note);
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            //everything that is not row is properly outputing.
            echo "Inside while<br />";
            echo $row['dueDate'] . " " . $row['noteEntry'] . "Rows should be here<br />";
            echo "Other side of rows!";
        }
        
    }
    else
        {
            echo 'Search could not be found.';
        }
?>
</body>

</html>