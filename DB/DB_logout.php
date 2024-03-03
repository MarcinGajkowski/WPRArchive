<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['haslo']);
unset($_SESSION['id']);

session_destroy();
header("location: DB_sesje.php");
