<?php
    // require "head.php";
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>X - Login</title>
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logos/android-icon-192x192.png">
        <link rel="icon" type="image/png" href="./assets/img/logos/android-icon-192x192.png">

        <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css" rel="stylesheet">
    
        <link rel="icon" type="image/x-icon" href="./assets/img/logo-ct.png" style="margin: -10px;">
        <link rel="stylesheet" href="./assets/css/loginAs.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <div class="main">
            <div style="text-align:center"><h2>Anda ingin login sebagai:</h2>
            </div>
            <a href="login_admin.php">
            <div class="content">
                <h3>Admin</h3>
            </div>
            </a>
            <a href="login.php">
            <div class="content">
                <h3>Guru</h3>
            </div>
            </a>
            <a href="login.php">
            <div class="content">
                <h3>Murid</h3>
            </div>
            </a>
        </div>
    </body>
</html>