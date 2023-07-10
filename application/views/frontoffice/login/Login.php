<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css"); ?>">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>Se connecter</h1>
            <form action="<?php echo base_url('Login/simplelogin')?>" method="post">
                <div class="field">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email" name="email" value="mirija@gmail.com">
                </div>
                <div class="field">
                    <label for="">Mot de passe</label>
                    <input type="password" placeholder="Mot de passe" name="mdp" value="mirija">
                </div>
                <div class="buttons">
                    <div>
                        <input type="submit" value="Se connecter">
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