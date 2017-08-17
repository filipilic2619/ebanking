<!DOCTYPE html>
<html>
<?php include ("session.php") ?>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</head>
<body>
<div class="login-form" name="login-form">
    <h1>E-banking</h1>
    <div class="form-group log-status">
        <input type="text" class="form-control" placeholder="Korisničko ime " id="UserName" name="username">
        <i class="fa fa-user"></i>
    </div>
    <div class="form-group log-status">
        <input type="password" class="form-control" placeholder="Lozinka" id="Password" name="password">
        <i class="fa fa-lock"></i>
    </div>
    <span class="alert">Pogrešno korisničko ime ili lozinka</span>

    <button type="button" class="log-btn">Logovanje</button>
</div>
</body>
</html>