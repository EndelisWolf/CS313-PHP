<?php
include 'db.php';

session_start();
?>

<?php
    //$user = htmlspecialchars$_POST[];
    if(isset($_POST))
    {
       $req = $db->query("SELECT id, name, username, password FROM users WHERE username = ".$_POST['uName']);
       $logn = $req->fetch(PDO::FETCH_ASSOC);
       if (length($logn) < 1)
       {
           echo "Invalid entrie(s)!";
       }
    }


?>
<!-- This should be used with the login table portion of my database 
     Reminder: Michael, remember to allow the entry fields be used for making an account or logging into one-->
<!doctype html>
<html>

<head>
    <title>To do Login</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>

<body class="generalBG">
    <div class="generalFormat">
        <h1>Welcome to the simpliest College To Do list!</h1>
        <h3>Please enter your First Name, User Name, and Password</h3>
        <!-- a form should be here, but currently that won't be added due to additonal research you need before confirming that -->
        <!--<form action="index.php" method="POST"></form> Are two required for Creating an account and going to an account? Research that -->
        <form action="login.php" method="POST">
            <span>Name: </span><input type="text" size="10" maxlength="20" placeholder="First Name" name="fName" required>
            <br />
            <span>Username: </span><input type="text" size="10" maxlength="16" minlength="3"
                placeholder="3 - 16 Characters" name="uName" required>
            <!-- Java script function sohuld be included here to make sure no two usernames can be the same -->
            <br />
            <span>Password: </span><input type="text" size="10" maxlength="16" minlength="3"
                placeholder="3 - 16 Characters" name="pwd" required>
            <br />
            <input type="submit" value="Login">
            
            <input type="submit" value="Create Account">
            <!-- The ability to move pages from here will begin once the login system is implemented -->
        </form>


    </div>
</body>

</html>