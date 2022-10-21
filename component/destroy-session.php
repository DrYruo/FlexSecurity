<?php
session_start();
session_destroy();
header("Location: ../page/acces-indirect.php");
