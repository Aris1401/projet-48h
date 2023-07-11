<div class="container-fluid py-4">
      <form method="POST" action="<?php echo base_url("Admin/insertActiviteSport"); ?>"
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
                                    <label for="example-text-input" class="form-control-label">Activite</label>
                                    <input class="form-control" type="text" name="idActivite" id="idActivite">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Sport</label>
                                    <textarea class="form-control" id="idSport" name="idSport" rows="5" cols="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Duree</label>
                                    <input class="form-control" type="number" name="duree" id="duree">
                                </div>
                            </div> 
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nombre</label>
                                    <input class="form-control" type="number" step="0.01" name="nombre" id="nombre" min="0">
                                </div>
                            </div>  
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Variation Poids</label>
                                    <input class="form-control" type="number" step="0.01" name="variationPoids" id="variationPoids">
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
                            <p class="mb-0">Liste des Acivites Sportives</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Activite</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sport</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Duree</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Variation Poids</th>
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
                                                <p class="text-xs font-weight-bold mb-0"><?php echo $item->idActivite ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->idSport ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->duree ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->nombre ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->variationPoids ?></p>
                                            </td>
                                        
                                            <td class="align-middle">
                                            <a href="<?php echo base_url("Admin/?id=" .$item->idActiviteSport); ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Afficher programme
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                            <a href="<?php echo base_url("Admin/insertActiviteSport?id=" .$item->idActiviteSport); ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Ajouter un programme
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                            <a href="<?php echo base_url("Admin/mandaloCActiviteSport?id=" .$item->idActiviteSport); ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Modifier
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="<?php echo base_url("Admin/deleteActiviteSport?id=" .$item->idActiviteSport); ?>" class="text-secondary font-weight-bold text-xs text-danger" data-toggle="tooltip" data-original-title="Edit user">
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