<?php
session_start();
date_default_timezone_set('UTC');
?>

<html>

<head>
    <title> Portfolio Walter Karl </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="fond ">


    <!-- DIV = Ce que je veux dépendant de ce que je met dedans  -->
    <div id="header" class="row ">
        <div class="col-5">
            zz
        </div>    

        <div class="col-2">
            zz
        </div>

        <div class="col-5">
        <?php    
        include("menu.php");
        ?>
        </div>
    </div>

    <div id="content" class="container">
        <?php

        if (isset($_GET["content"])) {

            include $_GET["content"] . ".php";
        } else {
            include "accueil.php";
        }
        ?>

    </div>

    <div id="footer" class="row">

</body>

</html>