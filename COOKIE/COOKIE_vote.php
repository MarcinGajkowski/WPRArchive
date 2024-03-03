<?php
if(!isset($_POST['decision']) && !isset($_COOKIE['decision']))
{
    include ("COOKIE_header.php");
    include ("HTML_COOKIE.php");
    include ("COOKIE_footer.php");
}
elseif(isset($_POST['decision']))
{
    setcookie("decision", $_POST['decision'], time() + 10);
    header("location: COOKIE_result.php");
}
