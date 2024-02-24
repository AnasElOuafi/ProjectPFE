<?php
$title = 'Boit mails';
$css = '';
require_once 'layouts/_head.php';
?>


<body class="container">
    <?php
    require_once 'layouts/_nav.php';
    ?>

    <h3><?= $title; ?> <a href="boit-Mail" class="btn btn-outline-primary"><i class="fa fa-refresh"></i> Actualiser</a></h3>
    <?php
    // Messages
    $success = '<div class="alert alert-success" role="alert">Opération terminée avec <strong>succès</strong></div>';
    $danger = '<div class="alert alert-danger" role="alert"><strong>Erreur</strong> lors de la terminaison de cette opération</div>';
    // Update php code
    if (isset($_POST['marqueCommeLu'])) {
        $id = $_POST['marqueCommeLu'];
        echo ($MessageController->marqueCommeLu($id)) ? $success : $danger;
    }
    // Delete php code
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        echo ($MessageController->delete($id)) ? $success : $danger;
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Object</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $AllMails = $MessageController->read();
            if (!empty($AllMails)) {
                foreach ($AllMails as $i => $Mail) :
            ?>

                    <tr>
                        <td><?= $Mail['id']; ?></td>
                        <td><?= $Mail['name']; ?></td>
                        <td><?= $Mail['email']; ?></td>
                        <td><?= $Mail['object']; ?></td>
                        <td><?= $Mail['date']; ?></td>
                        <td>
                            <form method="post">
                                <a href="msg-<?= $Mail['id']; ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                <?php if ($Mail['etat'] == 0) { ?><button type="submit" name="marqueCommeLu" value="<?= $Mail['id']; ?>" class="btn btn-success"><i class="fa fa-check"></i></button><?php } ?>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $Mail["id"]; ?>"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

            <?php endforeach;
            } else {
                echo '<tr><td colspan="6" class="text-center align-middle">No data to show</td></tr>';
            } ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Object</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </tfoot>
    </table>
    <?php
    $AllMails = $MessageController->read();
    foreach ($AllMails as $i => $Mail) :
    ?>
        <!-- Model Delete studient -->
        <div class="modal fade" id="delete<?= $Mail["id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                            <p class="mb-3">Voulez vous supprimer ce message ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="delete" value="<?= $Mail["id"]; ?>" class="btn btn-outline-success">Oui</button>
                            <button type="rest" class="btn btn-outline-danger" data-bs-dismiss="modal">Non</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>


<?php
$js = '';
require_once 'layouts/_footer.php';
?>