<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/navbar.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/font/fontawesome/css/all.min.css"); ?>">
    </head>
    <body>
        <header class="navigation-bar">
            <nav class="nav-bar">
                <div class="nav-brand">
                    <h4>Regima</h4>
                </div>
                
                <ul class="nav-links">
                    <li class="nav-link"><a href="#">Accueil</a></li>
                    <li class="nav-link"><a href="#">Panier</a></li>
                </ul>
                
                <ul class="nav-links right">
                    <li class="nav-link"><a id="profil" href="<?php echo base_url("Profil"); ?>">Profil</a></li>
                    <li class="nav-link"><a href="#"><i class="fa fa-power-off"></a></i></li>
                </ul>
            </nav>
        </header>
        <!<!-- End Navbar -->