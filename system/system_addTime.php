<?php
session_start();
require_once '../class/Class_database.php';

if (isset($_POST['userControle'])){
    header('Location: ../pages/page_userControle.php');
}

if (isset($_POST['timeControle'])){
    header('Location: ../pages/page_timeControle.php');
}

if (isset($_POST['mainPage'])){
    header('Location: ../pages/page_mainPage.php');
}

if (isset($_POST['save'])){
    $datum = $_POST['date'];
    $start = $_POST['start'];
    $stop = $_POST['stop'];
    $beschreibung = $_POST['description'];;
    $projekt = $_POST['projekt'];
    $db = new Class_database();
    $query = $db->mysql->query("SELECT projektId FROM projekt WHERE projektname = '".$projekt."'");
    $res = $query->fetch_assoc();
    $projektid = $res['projektId'];
    $userid = $_SESSION['userId'];
    $db->mysql->query("INSERT INTO zeit (userId, projektId, datum, start, stop, beschreibung) VALUE ($userid, $projektid, '$datum', '$start', '$stop', '$beschreibung')");
    $db->close_connection();
}
