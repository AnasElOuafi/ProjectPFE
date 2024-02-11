<?php
$title = 'Accueil';
$css = '';
require_once 'layouts/_head.php';
?>


<body>
    <?php
    require_once 'layouts/_nav.php';
    ?>

    <div class="container home-stats text-center">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="stat st-members">
                    Total Members
                    <span><a href="#">1450</a></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-pending">
                    Pending Members
                    <span><a href="#">800</a></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-items">
                    Total Items
                    <span>1500</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat st-comments">
                    Total Comments
                    <span><a href="<?= $Mail['id']; ?>"></a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container latest">
        <div class="row">
            <!-- Column for Registered Users -->
            <div class="card col-sm-6">
                <h5 class="card-header"><i class="bi bi-person-vcard"></i> Latest Registered Users</h5>
                <div class="card-body">
                    <div class="panel-body">
                        <ul class="list-unstyled latest_users">

                            <li>

                                <a href="#">
                                    <span class="btn btn-success float-right">
                                        <i class="bi bi-pencil-square"></i> Edit </a>
                                </span>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- Column for Latest Items -->
            <div class="card col-sm-6">
                <h5 class="card-header"><i class="bi bi-diagram-3"></i> Latest Items</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                </div>
            </div>
        </div>
    </div>

</body>


<?php
$js = '';
require_once 'layouts/_footer.php';
?>