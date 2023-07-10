<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url("assets/bulma/bulma.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/inscription.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/objectifs.css"); ?>">
        <title>Inscription</title>
    </head>
    <body>
        <div class="container">
            <div class="left">
                <h1>Choisissez votre objectif</h1>
                
                <form>
                    <div class="field objectifs">
                        <input type="radio" id="1" value="1" name="objectif">
                        <label class="radio" for="1">
                            Perdre du poids
                        </label>
                        
                        <input type="radio" id="0" value="0" name="objectif">
                        <label class="radio" for="0">
                            Prendre du poids
                        </label>
                    </div>
                        
                    <div class="buttons">
                        <div>
                            <input type="submit" value="Choisir Objectif">
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="right">
                <img style="width: 34rem;" src="<?php echo base_url("assets/img/dejeuner-sante-emporter-dans-boite-lunch.jpg"); ?>" alt="">
            </div>
        </div>
    </body>
</html>
