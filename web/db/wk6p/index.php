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
    <title>To Do Entries</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>
<!-- The Add feature is not yet functional, that should be done in week 6 though.-->

<body class="generalBG">
    <div class="generalFormat">
        <h1 class="softColor">Daily School Todo List</h1>
        <form action="display.php" method="GET">
            <span class="indextext softColor">Choose a task from the list provided:</span><br>
            <?php
    echo "<select name='listSelect'>";
    foreach ($db->query('SELECT duedate FROM list') as $row)
    {
        echo "<option value='".$row['duedate']."'>".$row['duedate']."</option>";
    }
    echo "</seclect><br /><br />";
    ?>
            <input type="submit" value="Find Note">
            <!-- Add a view all option after you understand how to implement it -->
        </form>
        <!--<form action="viewall.php" method="POST">
            <?php
                //($db->query('SELECT * FROM list'))
            ?>
            <input type="submit" value="View All">
        </form>-->
        <br />
        <br />

        <form action="display.php" method="POST">
            <label>Completed By:</label><br />
            <input type="date" name="duedate" id="duedate"><br />
            <label>What is to be done?</label><br />
            <input type="text" name="noteentry" id="noteentry"><br />
            <input type="submit" value="Add Note"><br />
        </form>

    </div>
</body>

</html>