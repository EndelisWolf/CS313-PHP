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
<!-- Not adding the username and password feature in yet due to the supposed complexity of running storing it and loading it.
     Feature to add additonal information, and delete tasks are to be stuidided and found out as well-->
<body>
    <div class="generalFormat">
        <h1 class="softColor">Daily School Todo List</h1>
        <form action="display.php" method="GET">
            <span class="indextext softColor">Choose a task from the list provided:</span><br>
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