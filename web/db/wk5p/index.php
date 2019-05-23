<?php
//$GLOBALS['']='';
//$GLOBALS['']='';

include 'db.php';

session_start();

?>

<!DOCTYPE html>
<html>
    <head>

    </head>
 <body>
     <div>
        <form action="display.php" method="get">
        Choose your note:<br>
         <?php

    echo "<select>";
    foreach ($db->query('SELECT id FROM list') as $row)
    {
        echo "<option value='".$row['id']."'>".$row['id']."</option>";
    }
    echo "</seclect>";
    ?>
    <br>
    <button type="submit">Find Note</button>
         </form>
    

/* For reference

foreach ($db->query('SELECT name, username, password FROM users') as $row)
{
    echo 'name: ' . $row['name'];
  echo 'user: ' . $row['username'];
  echo ' password: ' . $row['password'];
  echo '<br/>';
}*/

         
     </div>
 </body>




</html>