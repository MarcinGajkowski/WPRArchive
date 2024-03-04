<?php
session_start();

$_SESSION['tries']++;
$firstQuest = "location: PROJ_questions.php?id=1";
header($firstQuest);
exit;

