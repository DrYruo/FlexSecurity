<?php
$login = "admin";
$password = "admin";

if(isset($_POST['sessionLoginDanger']) && isset($_POST['sessionPasswordDanger'])) {
    if($_POST['sessionLoginDanger'] == $login && $_POST['sessionPasswordDanger'] == $password) {
        header("Location: ../page/page-admin-non-securise.php");
    } else {
        header("Location: ../page/acces-indirect.php");
    }
}

