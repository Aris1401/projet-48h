<div class="container-fluid py-4">
         <form action="getValeurInsert" method="post">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Activite Sportive</p>
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
                            <p class="mb-0">Liste des Activites</p>
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
                                                <p class="text-xs font-weight-bold mb-0"><?php echo $item->designationActivite ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->duree ?></p>
                                            </td>
                                        
                                            <td class="align-middle">
                                                <a href="getValeurModifier/?id=<?php echo $item->idRegime; ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Afficher programme
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="getValeurModifier/?id=<?php echo $item->idRegime; ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Ajouter un programme
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="getValeurModifier/?id=<?php echo $item->idRegime; ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Modifier
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="delete/?idd=<?php echo $item->idRegime; ?>" class="text-secondary font-weight-bold text-xs text-danger" data-toggle="tooltip" data-original-title="Edit user">
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