<?php 
include 'db.php';

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
        $listItem = $_GET['listSelect'];
        /*$result = 'SELECT dueDate, noteEntry FROM list WHERE id='.$listItem;
        echo ($result);
        $note = $db->query($result);
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            echo $row['dueDate'] . " " . $row['noteEntry'];
        }
        
    }
    else
        {
            echo 'Search could not be found.';
        }*/

        foreach ($db->query('SELECT dueDate, noteEntry, password FROM list') as $row)
        {
            echo $row['dueDate'] . " " . $row['noteEntry'];
        }
    }
?>
</body>

</html>