<?php
session_start();
date_default_timezone_set('UTC');
const INDEX_LOADED = 1;
?>
<!-- <!DOCTYPE html> -->
<html lang="fr">

<head>
    <title> Portfolio Walter Karl </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/test.css">
    <script src="./javascript/index.js"></script>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>


<body class=" container fond police body">


    <!-- DIV = Ce que je veux dépendant de ce que je met dedans  -->
    <div id="header" class="row">
        <?php
        require("menu.php");
        ?>
    </div>
    <br>
    <br>
    <br>
    <div id="page" class="row">
        <div id="content" class="container body_css">
            <?php

            $file ='accueil.php';

            if(isset($_GET['content'])) {
                $content  = htmlspecialchars($_GET['content']);
                $file = $content . '.php';
            }

            if(!file_exists($file))
                $file ='accueil.php';


            require $file;

            ?>

        </div>
    </div>
</body>


</html>
