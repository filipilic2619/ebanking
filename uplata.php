<?php
include ("includes/functions.php");

$stanje = floatval(getStanje($_POST["racunplatioca"])) - floatval($_POST["iznos"]);
uplata($_POST["imeplatioca"], $_POST["imeprimaoca"], $_POST["racunplatioca"], $_POST["racunprimaoca"], $_POST["svrha"], $_POST["datum"], -$_POST["iznos"], $stanje, $_POST["model"],$_POST["poziv"]);
setStanje($stanje, $_POST["racunplatioca"]);
echo "ok";
?>