<?php
$title='';
$css='';
require_once 'layouts/_head.php';
?>


<body>
<?php
require_once 'layouts/_nav.php';
?>
<div class="container">
        <main>
            <?php
            // Messages
            $success = '<div class="alert alert-success" role="alert">' . $IndependenceController->translate("Opération terminée avec", $lang) . ' <strong>' . $IndependenceController->translate("succès", $lang) . '</strong>.</div>';
            $danger = '<div class="alert alert-danger" role="alert"><strong>' . $IndependenceController->translate("Erreur", $lang) . '</strong> ' . $IndependenceController->translate("lors de la terminaison de cette opération.", $lang) . '</div>';
            // Update php code
            if (isset($_POST['update'])) {
                $id = $_POST['update'];
                echo ($CompteController->update($_POST['icon'], $_POST['name'], $_POST['description'],  $id)) ? $success : $danger;
            }
            // Delete php code
            if (isset($_POST['delete'])) {
                $id = $_POST['delete'];
                echo ($CompteController->delete($id)) ? $success : $danger;
            }
            ?>
            <!-- Section operations Start -->
            <div class="table-responsive">
                <table id="example" class="py-3 caption-top table table-bordered">
                    <caption>
                        <?= $IndependenceController->translate("Liste des produits", $lang) . ' (' . $CompteController->getCountInscription() . ')'; ?>
                    </caption>
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>
                                <?= $IndependenceController->translate("icon", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("name", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("description", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("Paramétres", $lang); ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $all = $CompteController->read();
                        foreach ($all as $i => $item):
                            ?>
                            <!-- User item <?= $item["id"]; ?> -->
                            <tr>
                                <th scope="row">
                                    <?= $item["id"]; ?>
                                </th>
                                <td>
                                    <?= $item["icon"]; ?>
                                </td>
                                <td>
                                    <?= $item["name"]; ?>
                                </td>
                                <td>
                                    <?= $item["description"]; ?>
                                </td>
                                <td>
                                    <!-- Actions on student -->
                                    <form action="" method="POST">
                                        <!-- Update button studient -->
                                        <button type="button" class="btn btn-outline-warning px-4 me-sm-3"
                                            data-bs-toggle="modal" data-bs-target="#update<?= $item["id"]; ?>">
                                            <?= $IndependenceController->translate("Édit", $lang); ?>
                                        </button>
                                        <!-- Delete button studient -->
                                        <button type="button" class="btn btn-outline-danger px-4 me-sm-3"
                                            data-bs-toggle="modal" data-bs-target="#delete<?= $item["id"]; ?>">
                                            <?= $IndependenceController->translate("Supprimer", $lang); ?>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>
                                <?= $IndependenceController->translate("icon", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("name", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("description", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("Paramétres", $lang); ?>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <?php
            $all = $CompteController->read();
            foreach ($all as $i => $item):
                ?>
                <!-- Model Update studient -->
                <div class="modal fade" id="update<?= $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                    <?= $IndependenceController->translate("Édit élement", $lang); ?>
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="icon" class="col-form-label">
                                            <?= $IndependenceController->translate("icon", $lang); ?> :
                                        </label>
                                        <input type="text" class="form-control" id="icon" name="icon"
                                            value="<?= $item["icon"]; ?>" placeholder="<?= $item["icon"]; ?>"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="col-form-label">
                                            <?= $IndependenceController->translate("Nom de produit", $lang); ?>
                                            :
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="<?= $item["name"]; ?>" placeholder="<?= $item["name"]; ?>"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="col-form-label">
                                            <?= $IndependenceController->translate("description", $lang); ?> :
                                        </label>
                                        <input type="text" class="form-control" id="description" name="description"
                                            value="<?= $item["description"]; ?>" placeholder="<?= $item["description"]; ?>" required>
                                    </div>
                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="update" value="<?= $item["id"]; ?>"
                                        class="btn btn-outline-success">
                                        <?= $IndependenceController->translate("Confirmer", $lang); ?>
                                    </button>
                                    <button type="rest" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                        <?= $IndependenceController->translate("Annuler", $lang); ?>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Model Delete studient -->
                <div class="modal fade" id="delete<?= $item["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                    <?= $IndependenceController->translate("Supprimer élement", $lang); ?>
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <p class="mb-3">
                                        <?= $IndependenceController->translate("Voulez vous supprimer cet element ?", $lang); ?>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="delete" value="<?= $item["id"]; ?>"
                                        class="btn btn-outline-success">
                                        <?= $IndependenceController->translate("Oui", $lang); ?>
                                    </button>
                                    <button type="rest" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                        <?= $IndependenceController->translate("Non", $lang); ?>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </main>
    </div>




<?php
$js ='';
require_once 'layouts/_footer.php' ;
?>