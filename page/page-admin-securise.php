<?php
require_once "../component/admin-session.php"
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accès Indirect</title>
    <link rel="stylesheet" href="../css/bootstrap_sources/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="row bg-dark py-4">
        <div class="col-5 d-flex align-items-center">
            <a type="button" class="btn btn-outline-light px-4 my-auto" href="acces-indirect.php">Go Back</a>
        </div>
        <div class="col-7">
            <h1 class="text-light">SESSION ADMIN</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row my-5 justify-content-md-center">
        <div class="col-6 text-center py-2 border border-3 border-dark">
            <?php
                if(!isset($_SESSION['adminConnection'])) {
                    echo "<p class='text-danger fs-3'>Contenu inaccessible, vous devez être connecté en tant d'administrateur.</p>";
                }
                elseif(isset($_SESSION['adminConnection']) && $_SESSION['adminConnection'] == false){
                    echo "<p class='text-danger fs-3'>Contenu inaccessible, vous devez être connecté en tant d'administrateur.</p>";
                }
                elseif(isset($_SESSION['adminConnection']) && $_SESSION['adminConnection'] == true) {
                    echo "<p class='text-success fs-3'>Contenu de foufou totalement accessible, bienvenu administrateur.</p>";
                }
                else {
                    echo 'coucou';
                }
            ?>
        </div>
    </div>
</div>


</body>
</html>
