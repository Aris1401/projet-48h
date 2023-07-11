    <link rel="stylesheet" href="<?php echo base_url("assets/css/suggestion.css"); ?>">
    <link rel="stylsheet" href="<?php echo base_url("assets/bulma/bulma/css/bulma.min.css") ?>">
    <link rel="stylsheet" href="<?php echo base_url("assets/bulma/dist/css/bulma-carousel.min.css") ?>">
    
    <section class="main-suggestion" style="background: url('<?php echo base_url('assets/img/top-view-fresh-vegetables-with-greens-white.jpg') ?>'); background-size: 100% 100%;">
        <?php if (count($suggestions) > 0) { ?>
        <div class="left-content">
            <div>
                <h1><?php echo $suggestions[0]->designationRegime ?></h1>
                <p class="duree">Duree: <?php echo $suggestions[0]->duree ?>jours</p>
                <p class="description"><?php echo $suggestions[0]->description ?></p>
            </div>
            
            <div class='container'>
                <div id="carousel-demo" class="carousel">
                        <div class="item-1">
                                huhu
                        </div>
                        <div class="item-2">
                                huhu
                        </div>
                        <div class="item-3">
                                huhu
                        </div>
                </div>
            </div>
        </div>
        
        <div class="right-content">
            <div>
                <div>
                   <h1><?php echo $suggestions[0]->designationRegime ?></h1>
                </div>

               <div class="menu">
                   <h1>Menu</h1>

                   <ul>
                       <li>Huhu</li>
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
