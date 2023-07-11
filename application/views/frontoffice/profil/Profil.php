    <link rel="stylesheet" href="<?php echo base_url("assets/css/profile.css"); ?>">

    <section class="main-header">
        <div class="profile-information">
            <img src="<?php echo base_url("assets/img/rasoa.png") ?>" alt="Profile">
            <h3><?php echo $prenom ?> <?php echo $nom ?>
                <?php if ($current_abonnement != null) { ?>
                <i style="color: gold;" class="fa fa-crown"></i>
                <?php } ?>
            </h3>
        </div>
    </section>
    
    <section class="main-content" style="">
        <div class="main-left-content">
            <div class="wallet">
                <h4>Balance</h4>
                
                <div class="wallet-footer">
                    <a id="use-code">Utiliser un code</a>
                    <p class="balance">0 Ar</p>
                </div>
            </div>
            
            <form class="user-code" action="<?php echo base_url("RequestCode/sendRequestCode"); ?>" method="get">
                <div>
                    <div class="field">
                        <input type="text" name="code">
                    </div>

                    <input type="submit" value="Utiliser">
                </div>
                    
                <table>
                    <thead>
                        <th>Code</th>
                        <th>Valeur</th>
                    </thead>
                    
                    <tbody>
                        <?php foreach($allCode as $code): ?>
                        <tr>
                            <td><?php echo $code->code ?></td>
                            <td><?php echo $code->valeurCode ?>Ar</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
            
            <?php if ($current_abonnement == null) { ?>
            <div class="abonnements">
                <?php foreach($abonnements as $abonnement): ?>
                <div class="Abonnement">
                    <h4><?php echo $abonnement->designation ?></h4>
                    
                    <div class="abonnement-footer">
                        <p><?php echo $abonnement->prix; ?>Ar</p>
                        <a href="<?php echo base_url("Profil/Sabonner?abonnement=" . $abonnement->idTypeAbonnement) ?>">S'abonner</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php } ?>
        </div>
        
        <div class="main-right-content">
            <h3>Profil Utilisateur</h3>
            
            <form method="POST" action="<?php echo base_url("Profil/modifierProfil"); ?>">
                <div class="field">
                    <label for="">Poids (kg)</label>
                    <div class="control">
                        <input type="number" value="<?php echo $profil->getPoids() ?>">
                    </div>
                </div>
                
                <div class="field">
                    <label for="">Taille (cm)</label>
                    <div class="control">
                        <input type="number" value="<?php echo $profil->getTaille() ?>">
                    </div>
                </div>
                
                <div class="field">
                    <label for="">Date Naissance</label>
                    <div class="control">
                        <input type="date" value="<?php echo $profil->getDateDeNaissance() ?>">
                    </div>
                </div>
                
                <a id="modifier-profil" href="<?php echo base_url("LoginRegister/profilUtilisateur") ?>">Modifier Profil</a>
            </form>
        </div>
        
        <div class="main-most-right">
            <h1>Votre IMC actuel</h1>
            
            <div>
                <p class="IMC">0.00</p>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url("assets/js/jquery/jquery-3.7.0.min.js") ?>"></script>
    <script>
        var url = "<?php echo base_url("Profil/GetBalance") ?>";
        var urlIMC = "<?php echo base_url("Profil/getIMC") ?>";
    </script>
    <script src="<?php echo base_url("assets/js/profil.js") ?>"></script>
    </body>
</html>
