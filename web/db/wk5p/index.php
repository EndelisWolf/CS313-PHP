<?php
//$GLOBALS['']='';
//$GLOBALS['']='';

include 'db.php';

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>To-Do To-Day</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>

<body>
    <div>
        <form action="display.php" method="GET">
            Choose a task from the list provided:<br>
    <?php
    echo "<select name='listSelect'>";
    foreach ($db->query('SELECT id FROM list') as $row)
    {
        echo "<option value='".$row['id']."'>".$row['id']."</option>";
    }
    echo "</seclect><br>";
    ?>
            <br>
            <br>
            <input type="submit" value="Find Note">
        </form>

    </div>
</body>




</html>