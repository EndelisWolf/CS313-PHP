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
        $note = $_GET['listSelect'];
        $sql = 'SELECT dueDate, noteEntry FROM list WHERE id='.$note;
        echo ($sql);
        $statement = $db->query($sql);
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo $row['dueDate'] . " " . $row['noteEntry'];
        }
        
    }
    else
        {
            echo 'Search could not be found.';
        }
?>
</body>

</html>