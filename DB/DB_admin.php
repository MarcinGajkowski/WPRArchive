<?php
require 'DB_portal.php';

$dbuser = 's24540';
$dbpass = 'trolololo';
$dsn = "mysql:host=localhost;dbname=mort"; //szuflandia.pjwstk.edu.pl btw!!
$db = new PDO($dsn, $dbuser, $dbpass);

session_start();
$login = "Marcin";
$haslo = "radMin";

if (isset($_POST['login']) && isset($_POST['haslo']))
{
    if ($_POST['login'] == $login && $_POST['haslo'] == $haslo)
    {
        $_SESSION['login'] = $_POST['login'];
        header("location: SESJE_logowanie.php");
    }
    else
    {
        echo "Niepoprawny login i/lub hasło. Proszę wpisać poprawne dane.";
        echo '<br />';
        echo '<a href="DB_sesje.php">Powrót</a>';
    }
}
else
{
    echo "Proszę wpisać potrzebne dane.";
}

if(isset($_SESSION['login']))
{
    $queLogin = $db->query("SELECT login FROM użytkownicy");
    if(!$queLogin)
    {
        echo "Nie znaleziono użytkownika $login w bazie danych.";
        echo '<a href="DB_sesje.php">Powrót</a>';
    }

    $queryId = $db->query("SELECT id FROM użytkownicy WHERE login =" . $_SESSION['login']);
    $getOwnerId = $queryId->fetch(PDO::FETCH_OBJ);

    $_SESSION['id'] = $getOwnerId;
    $carTable = $db->query("SELECT * FROM samochody WHERE uzytkownicy_id=" . $_SESSION['id']);
    $getCars = $carTable->fetch(PDO::FETCH_OBJ);

    echo '<br />';
    echo '<a href="DB_logout.php">Wyloguj</a>';
}
else
{
    echo "Trzeba podać login i hasło, żeby się tu zalogować.";
    echo '<br />';
    echo '<a href="DB_sesje.php">Powrót</a>';
}