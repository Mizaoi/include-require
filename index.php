<?php require_once 'components/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once 'components/sidebar.php'; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            
            if ($page == 'wisatawan') {
                include "pages/wisatawan.php";
            } else {
                include "pages/home.php";
            }
            ?>
        </main>
    </div>
</div>

<?php require_once 'components/footer.php'; ?>