<?php

require_once 'includes/User.php';


if ($_SERVER['REQUEST_METHOD'] == 'post') {
    $user = new User();// maak connectie met db
    $user->login($_POST['login'], $_POST['wachtwoord']);
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=MacRoman">
        <title>Inloggen</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <h1>Inloggen</h1>
          
        <form method="post" action="#">
            
            <input type="text" name="login" />
            <input type="password" name="wachtwoord" />

            <input type="submit" name="inloggen" />

        </form>
        
    </body>
</html>
