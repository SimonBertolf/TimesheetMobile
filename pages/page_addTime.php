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
            <form method="post" class="div01">
                <button class="button03" name="userControle">User-Controls</button>
                <button class="button03" name="timeControle">Time-Controls</button>
                <button class="button03" name="mainPage">Main Page</button>
            </form>
        </div>
        <div>
            <form class="div01" method="post">
                <input class="input02" type="date" name="date" required>
                <input class="input02" type="time" name="start" required>
                <input class="input02" type="time" name="stop" required>
                <select class="input02" name="projekt" required>
                    <?php
                    $db = new Class_database();
                    $query = $db->mysql->query('SELECT projektname FROM projekt WHERE projekt.archiviert = FALSE ORDER BY projektid');
                    $db->close_connection();
                    while ($res = $query->fetch_assoc()){
                    echo '<option>'.$res['projektname'].'</option>';
                    }
                    ?>
                </select>
                <input class="input02" type="text" placeholder="Description" name="description" required>
                <button class="button03" name="save">Save</button>
            </form>
        </div>
    </body>

    <footer>
        <p class="font02"> Angemeldet als: <?php  echo$_SESSION['vorname'].' '.$_SESSION['nachname']; ?></p>
    </footer>
</html>

