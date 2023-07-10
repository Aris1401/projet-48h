<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/details-profil.css"); ?>">
    <title>Login</title>
</head>
<body>
    <div class="container">
            <h1>Profil</h1>
            <form method="POST" action="<?php echo base_url("LoginRegister/validerProfilUtilisateur"); ?>">
                <div class="field is-grouped">
                    <div class="field">
                        <label for="">Poids</p>
                        <div class="control">
                            <input type="number" step="0.01" name="Poids" placeholder="Poids"/>
                        </div>
                    </div>

                    <div class="field">
                        <label for="">Taille</p>
                        <div class="control">
                            <input type="number" step="0.01" name="Taille" placeholder="Taille"/>
                        </div>
                    </div>
                </div>
                
                <div class="field">
                    <label for="">Date Naissance</p>
                    <div class="control">
                        <input type="date" name="DateDeNaissance" placeholder="Date Naissance"/>
                    </div>
                </div>
                
                <div class="field genres">
                    <input type="radio" id="1" value="1" name="Genre">
                    <label class="radio" for="1">
                        Homme
                    </label>

                    <input type="radio" id="0" value="0" name="Genre">
                    <label class="radio" for="0">
                        Femme
                    </label>
                </div>
                
                <div class="buttons">
                    <div>
                        <input type="submit" value="Enregistrer Profil">
                    </div>
                </div>
            </form>
    </div>
</body>
</html>