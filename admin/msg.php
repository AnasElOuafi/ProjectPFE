<?php
$title='Boit mails';
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
                $userID = $_POST['update'];
                echo ($MessageController->update($_POST['username'], $_POST['email'], $_POST['comment'], $userID)) ? $success : $danger;
            }
            // Delete php code
            if (isset($_POST['delete'])) {
                $userID = $_POST['delete'];
                echo ($MessageController->delete($userID)) ? $success : $danger;
            }
            ?>
            <!-- Section operations Start -->
            <div class="table-responsive">
                <table id="example" class="py-3 caption-top table table-bordered">
                    <caption>
                        <?= $IndependenceController->translate("Liste des commantaire", $lang) . ' (' . $MessageController->getCountInscription() . ')'; ?>
                    </caption>
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>
                                <?= $IndependenceController->translate("username", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("email", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("comment", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("Paramétres", $lang); ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $all = $MessageController->read();
                        foreach ($all as $i => $item):
                            ?>
                            <!-- User item <?= $item["userID"]; ?> -->
                            <tr>
                                <th scope="row">
                                    <?= $item["userID"]; ?>
                                </th>
                                <td>
                                    <?= $item["username"]; ?>
                                </td>
                                <td>
                                    <?= $item["email"]; ?>
                                </td>
                                <td>
                                    <?= $item["comment"]; ?>
                                </td>
                                <td>
                                    <!-- Actions on student -->
                                    <form action="" method="POST">
                                        <!-- Update button studient -->
                                        <button type="button" class="btn btn-outline-warning px-4 me-sm-3"
                                            data-bs-toggle="modal" data-bs-target="#update<?= $item["userID"]; ?>">
                                            <?= $IndependenceController->translate("Édit", $lang); ?>
                                        </button>
                                        <!-- Delete button studient -->
                                        <button type="button" class="btn btn-outline-danger px-4 me-sm-3"
                                            data-bs-toggle="modal" data-bs-target="#delete<?= $item["userID"]; ?>">
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
                                <?= $IndependenceController->translate("username", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("email", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("comment", $lang); ?>
                            </th>
                            <th>
                                <?= $IndependenceController->translate("Paramétres", $lang); ?>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <?php
            $all = $MessageController->read();
            foreach ($all as $i => $item):
                ?>
                <!-- Model Update studient -->
                <div class="modal fade" id="update<?= $item["userID"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                        <label for="username" class="col-form-label">
                                            <?= $IndependenceController->translate("username", $lang); ?> :
                                        </label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            value="<?= $item["username"]; ?>" placeholder="<?= $item["username"]; ?>"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="col-form-label">
                                            <?= $IndependenceController->translate("Nom de produit", $lang); ?>
                                            :
                                        </label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="<?= $item["email"]; ?>" placeholder="<?= $item["email"]; ?>"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="comment" class="col-form-label">
                                            <?= $IndependenceController->translate("comment", $lang); ?> :
                                        </label>
                                        <input type="text" class="form-control" id="comment" name="comment"
                                            value="<?= $item["comment"]; ?>" placeholder="<?= $item["comment"]; ?>" required>
                                    </div>
                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="update" value="<?= $item["userID"]; ?>"
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
                <div class="modal fade" id="delete<?= $item["userID"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                    <button type="submit" name="delete" value="<?= $item["userID"]; ?>"
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







</body>


<?php
$js ='';
require_once 'layouts/_footer.php' ;
?>