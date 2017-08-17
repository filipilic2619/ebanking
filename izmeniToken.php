<?php
session_start();
include ("includes/functions.php");

setToken(getUserId($_SESSION["username"]), $_POST["token"]);
?>