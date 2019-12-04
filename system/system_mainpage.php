<?php
session_start();
require_once('../class/Class_database.php');

if (isset($_POST['addTime'])){
    header('Location: ../pages/page_addTime.php');
}

if (isset($_POST['export'])){
    header('Location: ../pages/page_export.php');
}

if (isset($_POST['userControle'])){
    header('Location: ../pages/page_userControle.php');
}

if (isset($_POST['timeControle'])){
    header('Location: ../pages/page_timeControle.php');
}

if (isset($_POST['logOut'])){
    session_destroy();
    header('Location: ../pages/page_login.php');
}
