<?php
include 'db.php';

session_start();
?>

<?php

if (isset($_GET['delete'])) //if added to display.php it will always delete the entry because the website is reading it all as a html file as a whole and reads it all first. So by having it hear, it will only delte if I press delete.
{
    $delete = $_GET['delete'];
    $db->query("DELETE FROM list WHERE id= '$delete'");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do Entries</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>

<body class="generalBG">
    <div class="generalFormat">
        <h1 class="softColor">Daily School Todo List</h1>
        <form action="display.php" method="GET">
            <span class="indextext softColor">Choose a task from the list provided:</span><br>
            <?php
                echo "<select name='listSelect'>";
                foreach ($db->query('SELECT id, duedate FROM list ORDER BY duedate') as $row)
                {
                    echo "<option value='".$row['id']."'>".$row['duedate']."</option>";
                }
                echo "</seclect><br /><br />";
            ?>
            <input type="submit" value="Find Note">
        </form>

        <br />
        <br />

        <form action="display.php" method="POST">
            <label>Complete By:</label><br />
            <input type="date" name="duedate" id="duedate">
            <br />
            <br />
            <label>What needs to be done?</label><br />
            <input type="text" name="noteentry" id="noteentry"><br />
            <input type="submit" value="Add Note"><br />
        </form>

    </div>
</body>
</html>