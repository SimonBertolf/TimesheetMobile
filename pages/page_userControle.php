<?php
require_once '../system/system_userControle.php';
?>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>TimeSheet</title>
        <script>
            $(document).ready(function(){
                $("#1").click(function(){
                    $("#2").slideToggle("slow");
                });
            });
        </script>
    </head>

    <body>
        <div>
            <img id="text" src="../images/Timesheet.png"
        </div>
        <div class="button02" id='1' > Menue </div>
        <div class="div02" id="2">
            <form method="post" class="div01">
                <button class="button03" name="timeControle">Time-Controls</button>
                <button class="button03" name="mainPage">Main Page</button>
                <button class="button03" name="logOut">Logout</button>
            </form>
        </div>
        <div>
            <p class="font03">E-mail und Passwort Ändern</p>
            <form method="post" class="div01">
                <input class="input02" name="email" placeholder="E-mail" type="email" >
                <input class="input02" name="pasword" placeholder="Passwort" >
                <button class="button03" name="change">Ändern</button>
                <p class="font01"><?php echo $mesage; ?></p>
            </form>
        </div>
    </body>

    <footer>
        <p class="font02"> Angemeldet als: <?php  echo$_SESSION['vorname'].' '.$_SESSION['nachname']; ?></p>
    </footer>

</html>

