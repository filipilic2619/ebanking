<?php
session_start();
include("includes/functions.php");
$result = checkCode(getUserId($_SESSION['username']), $_POST["password"]);
if($result == "")
{
echo "fail";

}
else
{
    echo "true";
    $_SESSION['code']= "1";

}
?>