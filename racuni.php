<?php
session_start();

include ("includes/functions.php");

$userid = getUserId($_SESSION["username"]);
$niz = getRacuni($userid);

$brojevi = implode(",", array_keys($niz));
$nazivi =  implode(",", array_values($niz));


echo $brojevi . ";" . $nazivi;

?>