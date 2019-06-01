<?php
include 'db.php';

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Delete Confirmation</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>
<!-- The Add feature is not yet functional, that should be done in week 6 though.-->

<body class="generalBG">
    <div class="generalFormat">
        Are you sure you want to delete your note?
        <form action="index.php">
            <input type="submit" value="Return to Selection page">
        </form>

    </div>
</body>




</html>