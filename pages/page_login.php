<?php
require_once '../system/system_login.php';
?>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <title>TimeSheet</title>
    </head>
    <body>
        <div>
            <img id="text" src="../images/Timesheet.png">
            <img id="logo" src="../images/TSLogo.png">
        </div>
        <div>
            <form method="post">
                <input class="input" type="email" name="email" placeholder="E-mail" required>
                <input class="input" type="password" name="pasword" placeholder="Passwort" required>
                <button class="button" name="login">Login</button>
                <p class="error"><?php if (isset($errorMessage)){ echo$errorMessage;}?></p>
            </form>
        </div>
    </body>
    <footer>
    </footer>
</html>
