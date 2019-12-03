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
                $("#sidebarbutton").click(function(){
                    $("#slide").slideToggle("slow");
                });
            });
        </script>
    </head>

    <body>
        <div>
         <img id="text" src="../images/Timesheet.png"
        </div>
        <div id='sidebarbutton' >Menue <img src='../images/MenueLogo.png' style="width: 15px"></div>
        <div id="slide">
            <form method="post">
                <button class="buttonSlide" name="userControle">User-Controls</button>
                <button class="buttonSlide" name="timeControle">Time-Controls</button>
            </form>
        </div>
        <div style="margin-top: 100px">
            <form method="post">
                <button class="ButtonImage" name="addTime"><img src='../images/AddTime.png' style="width: 160px"></button>
                <button class="ButtonImage" name="export"><img src='../images/Export.png' style="width: 160px"></button>
            </form>
        </div>
    </body>
    <footer>
        <p> Angemeldet als: <?php  echo$_SESSION['vorname'].' '.$_SESSION['nachname']; ?></p>
    </footer>
</html>

