<?php
$title = 'Détailes Message';
$css = '';
require_once 'layouts/_head.php';
$Mail = $MessageController->getMailById($_GET['id_msg']);
$MessageController->marqueCommeLu($Mail['id']);
?>


<body class="container">
    <?php
    require_once 'layouts/_nav.php';
    // Messages
    $danger = '<div class="alert alert-danger" role="alert"><strong>Erreur</strong> lors de la terminaison de cette opération</div>';
    // Delete php code
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        echo ($MessageController->delete($id)) ? header("Location: boit-Mail") : $danger;
    }
    ?>
    <a href="boit-Mail" class="btn btn-outline-primary"><i class="fa fa-arrow-circle-left"></i> Return vers liste des messages</a>
    <h3>Mail Details from <stron><?= $Mail['name']; ?></stron>
    </h3>
    <div class="col-md-12">
        <div class="col-md-4">Mail : <?= $Mail['email']; ?></div>
        <div class="col-md-4">Object : <?= $Mail['object']; ?></div>
        <div class="col-md-4">Date : <?= $Mail['date']; ?></div>
    </div>
    <p><strong>Message :</strong> <?= $Mail['message']; ?></p>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $Mail["id"]; ?>"><i class="fa fa-trash"></i></button>
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
</body>
<?php
$js = '';
require_once 'layouts/_footer.php';
?>