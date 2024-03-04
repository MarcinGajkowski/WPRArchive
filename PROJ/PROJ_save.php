<?php
session_start();

$namesPattern = "/([A-Z][a-z]+\s?){2,4}/";
$nickPattern = "/^([\w]|[\s]){5,25}$/";
$luckyPattern = "/^[1-9][0-9]?$|^100$/";

$nameCheck = preg_match($namesPattern, $_POST['names']);
$nickCheck = preg_match($nickPattern, $_POST['nick']);
$luckCheck = preg_match($luckyPattern, $_POST['lucky']);

if (!$nameCheck)
{
    echo "The Names/Surnames section was not filled in properly.";
    echo '<br />';
    echo "Up to 4 names, each starting with one capital letter, are allowed to be entered.";
    echo '<br />';
    echo '<a href="PROJ_welcome.php">Go back</a>';
}
elseif (!$nickCheck)
{
    echo "The Nickname section was not filled in properly.";
    echo '<br />';
    echo "Your nickname can have up from 5 to 25 characters in it.";
    echo '<br />';
    echo '<a href="PROJ_welcome.php">Go back</a>';
}
elseif (!$luckCheck)
{
    echo "Your Lucky Number was not filled in properly.";
    echo '<br />';
    echo "You can choose any integer between 1 and 100.";
    echo '<br />';
    echo '<a href="PROJ_welcome.php">Go back</a>';
}

$_SESSION['names'] = $_POST['names'];
$_SESSION['nick'] = $_POST['nick'];
$_SESSION['lucky'] = $_POST['lucky'];

header("location: PROJ_questions.php?id=1");
exit;

