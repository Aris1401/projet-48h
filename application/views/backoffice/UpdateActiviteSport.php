<div class="container-fluid py-4">
      <form method="POST" action="<?php echo base_url("Admin/updateActiviteSport"); ?>"
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Activite</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <input class="form-control" type="hidden" name="idActiviteSport" id="idRegime" value="<?php echo $regimes->getIdActiviteSport() ?>">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Activite</label>
                                    <input class="form-control" type="text" name="idActivite" id="idActivite" value="<?php echo $regimes->getIdActivite() ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Sport</label>
                                    <input class="form-control" type="text" name="idSport" id="idSport" value="<?php echo $regimes->getIdSport() ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Duree</label>
                                    <input class="form-control" type="number" name="duree" id="duree" value="<?php echo $regimes->getDuree() ?>">
                                </div>
                            </div> 
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nombre</label>
                                    <input class="form-control" type="number" step="0.01" name="nombre" id="nombre" min="0" value="<?php echo $regimes->getNombre() ?>">
                                </div>
                            </div>  
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Variation Poids</label>
                                    <input class="form-control" type="number" step="0.01" name="variationPoids" id="variationPoids" value="<?php echo $regimes->getVariationPoids() ?>">
                                </div>
                            </div>
                        </div>
                        
                    
                        <input type="submit" value="Ajouter Code" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>