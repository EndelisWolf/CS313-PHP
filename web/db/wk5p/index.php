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
        <!-- <form action="" method="get">

         </form>-->
         <?php

foreach ($db->query('SELECT name, username, password FROM users') as $row)
{
    echo 'name: ' . $row['name'];
  echo 'user: ' . $row['username'];
  echo ' password: ' . $row['password'];
  echo '<br/>';
}

         ?>
     </div>
 </body>




</html>