<?php
require_once '../system/system_addTime.php';
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
        <div class="button02" id='1' >Menue</div>
        <div class="div02" id="2">
            <form method="post">
                <button class="button03" name="userControle">User-Controls</button>
                <button class="button03" name="timeControle">Time-Controls</button>
                <button class="button03" name="mainPage">Main Page</button>
            </form>
        </div>
        <div >

Datum Start Stop Projekt Description
        </div>
    </body>

    <footer>
        <p class="font02"> Angemeldet als: <?php  echo$_SESSION['vorname'].' '.$_SESSION['nachname']; ?></p>
    </footer>
</html>

