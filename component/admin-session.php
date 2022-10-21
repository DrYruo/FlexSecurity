<?php
$login = "admin";
$password = "admin";

session_start();

if(isset($_POST['sessionLogin']) && isset($_POST['sessionPassword'])) {
    if($_POST['sessionLogin'] == $login && $_POST['sessionPassword'] == $password) {
        $_SESSION['adminConnection'] = true;
    } else {
        $_SESSION['adminConnection'] = false;
    }
}

