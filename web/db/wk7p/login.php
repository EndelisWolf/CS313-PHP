<?php
include 'db.php';

session_start();
?>

<?php
    if(isset($_POST['uName']))
    {
       $req = $db->query("SELECT id, name, username, password FROM users WHERE username = '".$_POST['uName']."' and password = '".$_POST['pwd']."' and name = '".$_POST['fName']."'");
       $logn = $req->fetch(PDO::FETCH_ASSOC);
       if ($logn)
       {
           header('Location: index.php');
       }
       else
       {
            $wrong = "Invalid entrie(s)!";
       }
    }
?>

<!doctype html>
<html>

<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>

<body class="generalBG">
    <div class="generalFormat">
        <h1>Welcome to the simpliest College To Do list!</h1>
        <h3>Please enter your First Name, User Name, and Password</h3>
        
        <form action="login.php" method="POST">
            <span>Name: </span><input type="text" size="10" maxlength="20" placeholder="First Name" name="fName" required>
            <br />
            <span>Username: </span><input type="text" size="10" maxlength="16" minlength="3"
                placeholder="3 - 16 Characters" name="uName" required>
            
            <br />
            <span>Password: </span><input type="password" size="10" maxlength="16" minlength="3"
                placeholder="3 - 16 Characters" name="pwd" required>
            <br />
            <input type="submit" value="Login">            
        </form>

        <?php
            if(isset($wrong))
            {
                echo $wrong;
            }
        ?>

    </div>
</body>

</html>