<?php
session_start();
spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});
date_default_timezone_set('Europe/Paris');
require_once './functions/autoLoadFunction.php';
require_once './includes/base/nav.php';
require_once './includes/main.php';
require_once './includes/base/footer.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--=============== Favicon ===============-->
<link rel="apple-touch-icon" sizes="57x57" href="./assets/images/logoN/favicon-logoNoir/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="./assets/images/logoN/favicon-logoNoir/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="./assets/images/logoN/favicon-logoNoir/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="./assets/images/logoN/favicon-logoNoir/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="./assets/images/logoN/favicon-logoNoir/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="./assets/images/logoN/favicon-logoNoir/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="./assets/images/logoN/favicon-logoNoir/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="./assets/images/logoN/favicon-logoNoir/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="./assets/images/logoN/favicon-logoNoir/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="./assets/images/logoN/favicon-logoNoir/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/images/logoN/favicon-logoNoir/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="./assets/images/logoN/favicon-logoNoir/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logoN/favicon-logoNoir/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!--=============== CSS ===============-->
    <!-- <link rel="stylesheet" media="screen" href="./assets/css/style.css" />-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  
    <!--=============== Boxicons ===============-->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!--=============== Custom StyleSheet ===============-->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/admin.css" />
    <link rel="stylesheet" href="../assets/css/espaceUser.css" />
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <title>YMN - RESTAURANT ORIENTAL - Administrateur</title>
</head>
<body>