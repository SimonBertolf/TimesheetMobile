<?php
require_once '../system/system_mainpage.php';
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
        <div class="button02" id='1' >Menue </div>
        <div class="div02" id="2">
            <form method="post" class="div01">
                <button class="button03" name="userControle">User-Controls</button>
                <button class="button03" name="timeControle">Time-Controls</button>
                <button class="button03" name="logOut">Logout</button>
            </form>
        </div>
        <div>
            <form method="post">
                <button class="Button00" name="addTime"><img src='../images/AddTime.png' style="width: 160px"></button>
                <button class="Button00" name="export"><img src='../images/Export.png' style="width: 160px"></button>
            </form>
        </div>
    </body>

    <footer>
        <p class="font02"> Angemeldet als: <?php  echo$_SESSION['vorname'].' '.$_SESSION['nachname']; ?>  </p>
    </footer>

</html>

