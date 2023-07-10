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
        <title>Inscription</title>
    </head>
    <body>
        <div class="container">
            <div class="left">
                <h1>S'Inscrire</h1>
                
                <form>
                    <div class="field is-grouped">
                        <div class="field">
                            <label for="">Nom</label>
                            <div class="control">
                                <input type="text" placeholder="Nom" name="nom" value="mirija@gmail.com">
                            </div>
                        </div>
                        
                        <div class="field">
                            <label for="">Prenom</label>
                            <div class="control">
                                <input type="text" placeholder="Prenom" name="prenom" value="mirija">
                            </div>
                        </div>
                    </div>
                    
                    <div class="field">
                        <label for="">Email</label>
                        <div class="control">
                            <input type="email" placeholder="Email" name="email" />
                        </div>
                    </div>
                    
                    <div class="field">
                        <label for="">Mot de passe</label>
                        <div class="control">
                            <input type="password" placeholder="Mot de passe" name="email" />
                        </div>
                    </div>
                    <div class="buttons">
                        <div>
                            <input type="submit" value="S'Inscrire">
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
