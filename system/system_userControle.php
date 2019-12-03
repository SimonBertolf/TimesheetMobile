<?php
require_once '../class/Class_database.php';
session_start();

if (isset($_POST['timeControle'])){
    header('Location: ../pages/page_timeControle.php');
}

if (isset($_POST['mainPage'])){
    header('Location: ../pages/page_mainPage.php');
}

$vorname = $_SESSION['vorname'];
$nachname = $_SESSION['nachname'];
$email = $_POST['email'];
$pasword = md5($_POST['pasword']);
$mesage = '';
if (isset($_POST['change'])){
    $db = new Class_database();

    if ($_POST['email'] != null){
        $db->mysql->query("UPDATE `user` SET `email` = '$email'  WHERE `vorname` = '$vorname' AND `nachname` = '$nachname'");
        $mesage = 'die E-mail Adresse wurde angepasst';
    }
    if ($_POST['pasword'] != null){
        $db->mysql->query("UPDATE `user` SET `passwort` = '$pasword' WHERE `vorname` = '$vorname' AND `nachname` = '$nachname'");
        $mesage = 'Das Passwort wurde angepasst';
    }
    if($_POST['pasword'] == null && $_POST['email'] == null){
        $mesage = 'Fülle die Felder aus';
    }
}


