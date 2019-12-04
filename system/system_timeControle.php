<?php
session_start();
require_once '../class/Class_database.php';

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
