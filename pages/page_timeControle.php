<?php
require_once '../system/system_timeControle.php';

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
    <script>
        $(document).ready(function(){
            $("#sidebarbutton1").click(function(){
                $("#slide1").slideToggle("slide");
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
            <button class="buttonSlide" name="mainPage">Main Page</button>
            <button class="buttonSlide" name="logOut">Logout</button>
        </form>
    </div>
</body>
<footer>
    <p> Angemeldet als: <?php  echo$_SESSION['vorname'].' '.$_SESSION['nachname']; ?></p>
</footer>
</html>

