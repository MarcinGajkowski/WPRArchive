<?php
if(isset($_COOKIE['decision']))
{
    include ("COOKIE_header.php");
    echo "You have voted for: " . $_COOKIE['decision'] . " Congrats!";
    include ("COOKIE_footer.php");
}
else
{
    header("location: HTML_COOKIE.php");
}