<?php
session_start();

include ("includes/functions.php");

$id=getUserId($_SESSION["username"]);

echo getIme($id);
?>