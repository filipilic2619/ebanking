<?php
session_start();
include("includes/functions.php");

if (isset($_POST['username']) && isset($_POST['password']))
{

    $username = $_POST['username'];
    $password = md5($_POST['password']);


    if (checkLogin($username,$password))
    {

        $_SESSION['username']= $username;

    echo "ok";


    } else
    {
        echo "fail";
    }

}

?>