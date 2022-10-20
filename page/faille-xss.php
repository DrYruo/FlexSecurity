<!DOCTYPE html>
<?php
function getXssCommentaire() {
    if(isset($_GET['xssCommentaire'])) {
        echo "<p>".$_GET['xssCommentaire']."</p>";
    }
}

function getCommentaire() {
    if(isset($_GET['commentaire'])) {
        echo "<p>".htmlentities($_GET['commentaire'])."</p>";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faille XSS</title>
    <link rel="stylesheet" href="../css/bootstrap_sources/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="row bg-dark py-4">
        <div class="col-5 d-flex align-items-center">
            <a type="button" class="btn btn-outline-light px-4 my-auto" href="../index.php">Go Back</a>
        </div>
        <div class="col-7">
            <h1 class="text-light">Faille XSS</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row my-5 justify-content-md-center">
        <div class="col-6 text-center py-2 border border-3 border-dark">
            <h1>Le cross-site scripting !</h1>
            <p class="text-lg-start text-lg">Le cross-site scripting (faille XSS) est un type de faille de sécurité des sites web permettant d'injecter du code JavaScript dans une page.
                <br>Cela permet ainsi d'executer divers actions sur les navigateurs web visitant la page.
                <br>Les autres utilisateurs exécutent le script sans s’en rendre compte dès l’ouverture de la page.
            </p>
        </div>
    </div>
</div>

<div class="col mx-5">
    <div class="row my-5">
        <div class="col border border-2 border-danger py-2 bg-dark">
            <h1 class="text-danger text-center text-danger">Création d'article avec faille</h1>
            <form action="faille-xss.php" method="get">
                <div class="border border-1 border-danger py-2 px-2 my-2">
                    <div class="border border-1 border-danger py-2 px-2 my-2">
                        <p class="text-light">Blablabla je suis un article super intéressant ! Rajoute vite un commentaire !</p>
                    </div>
                    <label for="xssCommentaire" class="text-light">Votre commentaire :</label>
                    <input type="text" id="xssCommentaire" name="xssCommentaire" class="form-control mb-2">
                    <div class="mb-3 border border-1 border-danger py-5 px-2 my-2 bg-light">
                        <?php
                            getXssCommentaire();
                        ?>
                    </div>
                </div>
                <button id="btnXsssCommentaireDanger" type="submit" class="form-control btn btn-outline-danger px-4">Envoyer</button>
            </form>
        </div>
        <div class="col mx-5">

        </div>
    </div>

    <div class="row my-5">
        <div class="col border border-2 border-success py-2 bg-dark">
            <h1 class="text-success text-center">Création d'article sans faille</h1>
            <form action="faille-xss.php" method="get">
                <div class="border border-1 border-success py-2 px-2 my-2">
                    <div class="border border-1 border-success py-2 px-2 my-2">
                        <p class="text-light">Blablabla je suis un article super intéressant ! Rajoute vite un commentaire !</p>
                    </div>
                    <label for="commentaire" class="text-light">Votre commentaire :</label>
                    <input type="text" id="commentaire" name="commentaire" class="form-control mb-2">
                    <div class="mb-3">
                        <div class="mb-3 border border-1 border-success py-5 px-2 my-2 bg-light">
                            <?php
                                getCommentaire();
                            ?>
                        </div>
                    </div>
                </div>
                <button id="btnXsssCommentaireSuccess" type="submit" class="form-control btn btn-outline-success px-4">Envoyer</button>
            </form>
        </div>
        <div class="col mx-5">
            <?php
                echo htmlentities("<script type='text/javascript'>alert('test')</script>")
            ?>
        </div>
    </div>
</div>

</body>
</html>