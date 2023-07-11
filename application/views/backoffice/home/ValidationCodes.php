<div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Liste des code a Valider</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Utilisateur</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Code</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Validiter Code</th>
                                            <th class="text-secondary opacity-7"></th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php echo var_dump($invalides) ?>
                                    <?php foreach($invalides as $item): ?>
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0"><?php echo $item->user->getNom(); ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->code->getCode(); ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary mb-0"><?php echo $item->estValide; ?></p>
                                            </td>
                                        
                                            <td class="align-middle">
                                                <a href="getValeurModifier/?id=<?php echo $item->idValidationCode; ?>" class="text-secondary font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                                                Accepter
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="delete/?idd=<?php echo $item->idValidationCode; ?>" class="text-secondary font-weight-bold text-xs text-danger" data-toggle="tooltip" data-original-title="Edit user">
                                                Decliner
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