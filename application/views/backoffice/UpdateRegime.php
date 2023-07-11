<div class="container-fluid py-4">
      <form method="POST" action="<?php echo base_url("Admin/updateRegime"); ?>"
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Activite</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <input class="form-control" type="hidden" name="idRegime" id="idRegime" value="<?php echo $regimes->getIdRegime() ?>">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Designation</label>
                                    <input class="form-control" type="text" name="designation" id="designation" value="<?php echo $regimes->getDesignationRegime() ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="5" cols="10" ><?php echo $regimes->getDescription() ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Image</label>
                                    <input class="form-control" type="file" name="image" id="image" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Duree</label>
                                    <input class="form-control" type="number" step="0.01" name="duree" id="duree" min="0" value="<?php echo $regimes->getDuree() ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Variation Poids</label>
                                    <input class="form-control" type="number" step="0.01" name="variationPoids" id="variation-poids" value="<?php echo $regimes->getVariationPoids() ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Moyenne Prix Regime</label>
                                    <input class="form-control" type="number" step="0.01" name="prixRegime" id="prix-regime" min="0" value="<?php echo $regimes->getPrixRegime() ?>">
                                </div>
                            </div>
                        </div>
                    
                        <input type="submit" value="Ajouter Code" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>