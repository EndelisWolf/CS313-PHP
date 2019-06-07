<?php 
include 'db.php';

session_start();
?>

<?php
    if (isset($_POST['update']))
    {
        $noteentry = ($_POST['update']);
        $update = $db->query("UPDATE list SET noteentry='$noteentry' WHERE id= ".$_GET['listSelect']);
    }
?>

<!doctype html>
<html>
<head>    
    <title>Entry View</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>

<body class="sereneBGColor">
    <div class="generalFormat indextext">

        <?php

            if (isset($_GET['listSelect'])) {
                $note = $_GET['listSelect'];
                
                $statement = $db->query("SELECT duedate, noteentry FROM list WHERE id= '$note'");
                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                {
                    echo "The selected to do is to be completed on:" . " ". "<strong>" . $row['duedate'] . "</strong><br />" . "Here is the to do you have selected:" . "<br /><br />";
                    echo $row['noteentry'] . "<br /><br />";
                }
            }
            else if (isset($_POST)) {       
                $duedate = ($_POST['duedate']);
                $noteentry = ($_POST['noteentry']);
                $statement = $db->query("INSERT INTO list (duedate, noteentry, usersId, orderId) VALUES ('".$duedate."', ' ".$noteentry."', 1, 1)");
                $newid = $db->lastInsertId(); 
                echo "The selected to do is to be completed on:" . " ". "<strong>" . $duedate . "</strong><br />" . "Here is the to do you have selected:" . "<br /><br />";
                echo $noteentry . "<br /><br />";
            }
            else {
                    echo 'Search could not be found.';
                }
        ?>

        <br />
        <form action="index.php" method="POST">
            <input type="submit" value="Return to Selection Page">
        </form>

        <form action="index.php?delete=<?php echo $note; ?>" method="POST">
            <input type="submit" value="Delete Note">
        </form>

        <br />

        <form action="display.php?listSelect=<?php echo $note; ?>" method="POST">
            <p>Would you like to make some edits?</p>
            <input type="text" name="update" id="noteentry"><br />
            <input type="submit" value="Edit Note">
        </form>

    </div>
</body>
</html>