<?php
session_start();
require_once('../class/Class_database.php');

if (isset($_POST['login'])) {
    $db = new Class_database();
    $email = $_POST['email'];
    $passwort = md5($_POST['pasword']);
    $user = $db->mysql->query("SELECT * FROM user WHERE email = '$email'");
    $res = $user->fetch_assoc();
    if ($res !== false && $res !== null && $res['passwort'] == $passwort) {
        $_SESSION['user'] = $res['typ'];
        $_SESSION['userId'] = $res['userId'];
        $_SESSION['nachname'] = $res['nachname'];
        $_SESSION['vorname'] = $res['vorname'];
        header('Location: ../pages/page_default.php');
    } else {
        $errorMessage = " E-Mail oder Passwort ist Ungültig !!";
    }
    $db->close_connection();
}

