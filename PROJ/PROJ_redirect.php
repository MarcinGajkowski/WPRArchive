<?php
require "PROJ_questions.php";
session_start();
$nextQuest = "location: PROJ_questions.php?id=" . $quests[$imgId]->getId() + 1;
header($nextQuest);
exit;
