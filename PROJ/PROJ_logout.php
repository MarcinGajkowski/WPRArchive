<?php
session_start();

$record = [$_SESSION['names'], $_SESSION['nick'], $_SESSION['lucky'], $_SESSION['tries']];

if (!$bugFile = fopen('PROJ_records.csv', 'a'))
{
    echo "The records file could not be opened.";
    echo '<br />';
    echo '<a href="PROJ_welcome.php">Go back</a>';
}
else
{
    if (fputcsv($bugFile, $record) === false)
    {
        echo "Your record data could not be saved.";
        echo '<br />';
        echo '<a href="PROJ_welcome.php">Go back</a>';
    }
    else
    {
        unset($_SESSION['names']);
        unset($_SESSION['nick']);
        unset($_SESSION['lucky']);
        unset($_SESSION['tries']);

        fclose($bugFile);

        session_destroy();
        header("location: PROJ_welcome.php");
        exit;
    }
}