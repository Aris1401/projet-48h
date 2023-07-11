
    <div class="container-fluid py-4">
         <form action="getValeurInsert" method="post">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Code Journal</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Code</label>
                                    <input class="form-control" type="text" name="code_racine" id="code_racine">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Intitulee</label>
                                    <input class="form-control" type="text" name="intitule" id="intitule" placeholder="Intitulee">
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
                            <p class="mb-0">Liste Code Journal</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Code</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Intitulee</th>
                                            <th class="text-secondary opacity-7"></th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach($liste as $l): ?>
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0"><?php echo isset($l['racine_code']) ? $l['racine_code'] : ''; ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo isset($l['intitule']) ? $l['intitule'] : ''; ?></p>
                                            </td>
                                        
                                            <td class="align-middle">
                                                <a href="getValeurModifier/?id=<?php echo $l['id']; ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Modifier
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="delete/?idd=<?php echo $l['id']; ?>" class="text-secondary font-weight-bold text-xs text-danger" data-toggle="tooltip" data-original-title="Edit user">
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
    