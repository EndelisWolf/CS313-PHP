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
    </head>
 <body>
     <div>
        <form action="display.php" method="POST">
        Choose your note:<br>
         <?php

    echo "<select name='listSelect'>";
    foreach ($db->query('SELECT id FROM list') as $row)
    {
        echo "<option value='".$row['id']."'>".$row['id']."</option>";
    }
    echo "</seclect>";
    ?>
    <br>
    <br>
    <input type="submit" value="Find Note">
         </form>
    

<!--/* For reference

foreach ($db->query('SELECT name, username, password FROM users') as $row)
{
    echo 'name: ' . $row['name'];
  echo 'user: ' . $row['username'];
  echo ' password: ' . $row['password'];
  echo '<br/>';
}*/-->

         
     </div>
 </body>




</html>