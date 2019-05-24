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
        $todo = $_GET['listSelect'];
        $result = 'SELECT date, entry FROM list where id='.$todo;

        $note = $db->query($result);
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            echo $row['date'] . " " . $row['entry'];
        }
        
    }
    else
        {
            echo 'Search could not be found.';
        }
?>
</body>


</html>