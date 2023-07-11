    <link rel="stylesheet" href="<?php echo base_url("assets/css/suggestion.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/bulma/bulma/css/bulma.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/bulma/dist/css/bulma-carousel.min.css") ?>">
    
    <section class="main-suggestion" style="background: url('<?php echo base_url('assets/img/top-view-fresh-vegetables-with-greens-white.jpg') ?>'); background-size: 100% 100%;">
        <?php if (count($suggestions) > 0) { ?>
        <div class="left-content">
            <div>
                <h1 style="font-weight: bold; font-size: 2rem;" ><?php echo $suggestions[0]->designationRegime ?></h1>
                <p class="duree">Duree: <?php echo $suggestions[0]->duree ?>jours</p>
                <p class="description"><?php echo $suggestions[0]->description ?></p>
            </div>
            
            <div>
                <div id="programme-carousel" class="carousel">
                    <?php foreach($suggestions[0]->programme as $p) { ?>
                        <div class="program-item">
                            <h1 style="font-weight: bold;">Programme <?php echo $p->idProgrammeRegime ?></h1>
                            
                            <div>
                                <p><?php echo $p->plat->nom ?></p>
                                <p><?php echo $p->plat->recette ?></p>
                            </div>
                            
                            <h1 style="font-weight: bold; margin-top: .5rem;">Activitee Sportive:</h1>
                            
                            <div>
                                <p><?php echo $p->sport_a_faire->sport->designationSport ?></p>
                                <p><?php echo $p->sport_a_faire->sport->description ?></p>
                            </div>
                        </div>
                    <?php } ?>   
                </div>
            </div>
        </div>
        
        <div class="right-content">
            <div>
                <div>
                    <h1 style="font-weight: bold; font-size: 2rem;"><?php echo $suggestions[0]->designationRegime ?></h1>
                </div>

               <div class="menu">
                   <h1 style="font-weight: bold;">Menu</h1>

                   <ul>
                       <?php foreach($suggestions[0]->programme as $p) { ?>
                            <li><?php echo $p->plat->nom ?></li>
                       <?php } ?> 
                   </ul>
               </div>
            </div>
            
            <div class="payer-button">
                <h3><?php echo $suggestions[0]->prix ?>Ar</h3>
                <a href="<?php echo base_url("SuggestionRegime/Payer?regime=" . $suggestions[0]->idRegime . "&pour=" . $suggestions[0]->pour) ?>">Acheter</a>
            </div>
        </div>
        <?php } else { ?>
        <h1>Aucun regime qui peut vous correspondre.</h1>
        <?php } ?>
    </section>
    <script src="<?php echo base_url("assets/bulma/dist/js/bulma-carousel.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/suggestion.js") ?>" defer></script>
    </body>
</html>
