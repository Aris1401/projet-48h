        <link rel="stylesheet" href="<?php echo base_url("assets/css/accueil.css"); ?>">        
        <section class="header-content">
            <h1>Mangez plus sain et atteignez vos objectifs!</h1>
            
            <form class="objectif-poids" method="get" action="<?php echo base_url("SuggestionRegime") ?>">
                <p>Votre variation de poids: </p>
                <input type="text" name="variance" min="0" valie="0">
                <input type="submit" value="Aller">
            </form>
        </section>
    </body>
</html>
