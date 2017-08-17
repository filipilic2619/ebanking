<?php
include("includes/functions.php");

if (isset($_POST['deviceid']))
{
    $userId = getUserIdbyDevice($_POST['deviceid']);
    addVerification($userId, mt_rand(100000, 999999));
    echo getCode($userId);


}

?>