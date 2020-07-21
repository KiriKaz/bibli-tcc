<?php include_once 'includes/session.inc.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Imports -->
        <script src="https://kit.fontawesome.com/590513b2d9.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Muli|Raleway&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet'>

        <!-- Styles -->
        <link rel="stylesheet" href="etc/styles.css">
        <link rel="stylesheet" href="etc/classes.css">

        <!-- Scripts -->
        <script defer src="etc/main.js"></script>
        <script defer src="etc/classes.js"></script>
        <title>Bibli</title>
    </head>
    <body>
        </div>
        <nav id="nav">
            <div class="btn" id="show"><i class="fas fa-bars"></i></div>
            <img class="logo" src="etc/image_assets/XL-logo.svg" alt="Logotipo">
            <?php
            if(!isset($_SESSION['sessionid'])) {
            ?>
            <a href="login.php" class="btn" id="log"><i class="fas fa-sign-in-alt"></i></a>
            <?php
            } else {
            ?>
            <div class="btn dropdown" id="log">
                <a id="dropdown-toggle" data-toggle="dropdown">
                    <?=$_SESSION['sessionid']?><i class="fas fa-angle-down"></i>
                </a>
                <ul id="dropdown-menu">
                    <li id="logoutbtn"><a href="#">Logout</a></li>
                </ul>
            </div>
            <?php
            }
            ?>
        </nav>
        <div id="hamburguer-menu">
            <header>
                <div class="btn" id="hide"><i class="fas fa-times"></i></div>
                <?php
                if(!isset($_SESSION['sessionid'])) {
                ?>
                Boa noite!
                <?php
                } else {
                ?>
                Boa noite, <?=$_SESSION['sessionid']?>!
                <?php
                }
                ?>
            </header>
            <ul>
                <a href="#!"><li class="hamli" id="ham_home"><i class="fas fa-home"></i><span>Início</span></li></a>
                <a href="#!"><li class="hamli" id="ham_class"><i class="far fa-file"></i><span>Classes</span></li></a>
                <!-- <a href="#!"class="hamli" ><li id="ham_about"><i class="far fa-id-badge"></i><span>Sobre a Bibli</span></li></a> -->
                <a href="#!"><li class="hamli" id="ham_contact"><i class="far fa-address-book"></i><span>Contato</span></li></a>
            </ul>
        </div>
        <main>
            <?php include "includes/classes.inc.php"?>
        </main>
    </body>
</html>