<?php

if (isset($_POST['userControle'])){
    header('Location: ../pages/page_userControle.php');
}

if (isset($_POST['mainPage'])){
    header('Location: ../pages/page_mainPage.php');
}

if (isset($_POST['logOut'])){
    session_destroy();
    header('Location: ../pages/page_login.php');
}

$monate = array(
    1 => "Januar",
    2 => "Februar",
    3 => "M&auml;rz",
    4 => "April",
    5 => "Mai",
    6 => "Juni",
    7 => "Juli",
    8 => "August",
    9 => "September",
    10 => "Oktober",
    11 => "November",
    12 => "Dezember");
