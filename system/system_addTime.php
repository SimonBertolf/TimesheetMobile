<?php

if (isset($_POST['userControle'])){
    header('Location: ../pages/page_userControle.php');
}

if (isset($_POST['timeControle'])){
    header('Location: ../pages/page_timeControle.php');
}

if (isset($_POST['mainPage'])){
    header('Location: ../pages/page_mainPage.php');
}
