<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>template1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko:400,700&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Login-Form-Clean.css">

</head>

<body>
    <section class="login-clean">
        <form method="post" action="<?php echo base_url('welcome/login');?>">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="mb-3"><input class="form-control" type="email" name="mail" placeholder="Email"></div>
            <div class="mb-3"><input class="form-control" type="password" name="pass" placeholder="Password"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log In</button></div><a class="forgot" href="#">Inscription</a>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>