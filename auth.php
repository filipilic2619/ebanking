<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Token</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/auth.js"></script>
</head>
<body>
<div class="login-form" name="login-form">
    <h1>Token</h1>
     <div class="form-group log-status">
        <input type="password" class="form-control" placeholder="Sigurnosni kod" id="Password" name="password">
        <i class="fa fa-lock"></i>
    </div>
    <span class="alert">Pogrešan sigurnosni kod</span>

    <button type="button" class="log-btn">Proveri</button>
</div>
</body>
</html>