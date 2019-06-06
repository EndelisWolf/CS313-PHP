<?php 
include 'db.php';

session_start();
?>

<!doctype html>
<html>

<head>
    <title>To Do Results</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>

<body class="sereneBGColor">
    <!-- To do: Do research to make edits if you need it in a form or not when tranversing information for an update.-->
    <div class="generalFormat indextext">
        <?php
    if (isset($_GET['listSelect']))
    {
        $note = $_GET['listSelect'];
        //Due to using options to grab data, id=.note is for selecting the proper number id from the choices availible
        $statement = $db->query("SELECT * FROM list");
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            <table>
            
            </table>
        }
        
    }

        {
            echo 'Results could not be found.';
        }
?>
        <br />
        <form action="index.php" method="POST">
            <input type="submit" value="Return to Selection Page">
        </form>

    </div>
</body>

</html>