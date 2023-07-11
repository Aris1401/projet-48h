    <link rel="stylesheet" href="<?php echo base_url("assets/css/profile.css"); ?>">

    <section class="main-header">
        <div class="profile-information">
            <img src="<?php echo base_url("assets/img/rasoa.png") ?>" alt="Profile">
            <h3>Rasoa RakotoRakoto</h3>
        </div>
    </section>
    
    <section class="main-content">
        <div class="main-left-content">
            <div class="wallet">
                <h4>Balance</h4>
                
                <div class="wallet-footer">
                    <a href="#">Utiliser un code</a>
                    <p class="balance">2000 Ar</p>
                </div>
            </div>
            
            <form class="user-code">
                <div class="field">
                    <input type="text" name="code">
                </div>

                <input type="submit" value="Utiliser">
            </form>
        </div>
        
        <div class="main-right-content">
            <h3>Profil Utilisateur</h3>
            
            <form method="POST" action="<?php echo base_url("Profil/modifierProfil"); ?>">
                <div class="field">
                    <label for="">Poids (kg)</label>
                    <div class="control">
                        <input type="number" value="50">
                    </div>
                </div>
                
                <div class="field">
                    <label for="">Taille (cm)</label>
                    <div class="control">
                        <input type="number" value="50">
                    </div>
                </div>
                
                <div class="field">
                    <label for="">Date Naissance</label>
                    <div class="control">
                        <input type="date" value="2022-01-11">
                    </div>
                </div>
                
                <a id="modifier-profil" href="">Modifier Profil</a>
            </form>
        </div>
    </section>

    </body>
</html>
