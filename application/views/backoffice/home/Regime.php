<div class="container-fluid py-4">
      <form method="POST" action="<?php echo base_url("Admin/insertRegime"); ?>"
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Activite</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Designation</label>
                                    <input class="form-control" type="text" name="designation" id="designation">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="5" cols="10"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Image</label>
                                    <input class="form-control" type="file" name="image" id="image">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Duree</label>
                                    <input class="form-control" type="number" step="0.01" name="duree" id="duree" min="0">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Variation Poids</label>
                                    <input class="form-control" type="number" step="0.01" name="variationPoids" id="variation-poids">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Moyenne Prix Regime</label>
                                    <input class="form-control" type="number" step="0.01" name="prixRegime" id="prix-regime" min="0">
                                </div>
                            </div>
                        </div>
                    
                        <input type="submit" value="Ajouter Code" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>

        <div class="row mt-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Liste des Regimes</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Designation</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Duree</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Variation Poids</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prix Regime</th>
                                            <th class="text-secondary opacity-7"></th>
                                            <th class="text-secondary opacity-7"></th>
                                            <th class="text-secondary opacity-7"></th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach($regimes as $item): ?>
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0"><?php echo $item->designationRegime ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->duree ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->variationPoids ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->prixRegime ?></p>
                                            </td>
                                        
                                            <td class="align-middle">
                                            <a href="<?php echo base_url("Admin?id=" .$item->idRegime); ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Afficher programme
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                            <a href="<?php echo base_url("Admin/insertRegime?id=" .$item->idRegime); ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Ajouter un programme
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                            <a href="<?php echo base_url("Admin/mandaloCRegime?id=" .$item->idRegime); ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Modifier
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                            <a href="<?php echo base_url("Admin/deleteRegime?id=" .$item->idRegime); ?>" class="text-secondary font-weight-bold text-xs text-danger" data-toggle="tooltip" data-original-title="Edit user">
                                                Supprimer
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>