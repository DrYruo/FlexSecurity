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
            <a type="button" class="btn btn-outline-light px-4 my-auto" href="../index.php">Go Back</a>
        </div>
        <div class="col-7">
            <h1 class="text-light">Accès Indirect</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row my-5 justify-content-md-center">
        <div class="col-6 text-center py-2 border border-3 border-dark">
            <h1>L'accès indirect</h1>
            <p class="text-lg-start text-lg">
                Une faille d'accès indirect permet à un utilisateur d'accéder à une page ou d'en charger son contenu alors qu'il n'en a pas les droits d'accès.
                <br>Cette faille survient lorsqu'aucune vérification de la session en cours n'est effectuée pour afficher le contenu de la page.
            </p>
            <p class="text-lg-start text-lg">
                Dans nos examples nous souhaitons accéder à une page normalement uniquement accessible après la connexion de l'administrateur.
                <br>Il faut alors rentrer le login: <b>admin</b>
                <br>Et le mot de passe: <b>admin</b>
                <br>Le serveur va vérifier ces informations, si elles sont bonnes une redirection vers la page SESSION ADMIN sera effectuée.
            </p>
            <a href="../component/destroy-session.php" class="btn btn-outline-primary px-4">Reset la session en cours</a>
        </div>
    </div>
</div>

<div class="container-fluid px-2">
    <div class="row my-5">
        <div class="col border border-2 border-danger py-2 bg-dark">
            <h1 class="text-danger text-center">Veuillez vous connecter en tant qu'administrateur :</h1>
            <form action="../component/redirection-admin-session-non-securise.php" method="post">
                <div class="border border-1 border-danger py-2 px-2 my-2">
                    <label for="sessionLoginDanger" class="text-light">Login :</label>
                    <input type="text" id="sessionLoginDanger" name="sessionLoginDanger" class="form-control mb-2">
                    <label for="sessionPasswordDanger" class="text-light">Mot de passe :</label>
                    <input type="text" id="sessionPasswordDanger" name="sessionPasswordDanger" class="form-control mb-2">
                </div>
                <button id="btnAccesIndirectDanger" type="submit" class="form-control btn btn-outline-danger px-4">Envoyer</button>
            </form>
        </div>
        <div class="col mx-5">
            <h1>Explication de la faille :</h1>
            <p>
                Dans cet exemple les login et mot de passe sont bien vérifiés avant redirection.
                <br>Cependant aucune vérification n'est faites sur la session en cours et donc si l'on tente un accès indirect à cette page via l'URL suivant :
                <br><b>http://localhost/lpgl/FlexSecurity/page/page-admin-non-securise.php</b>
                <br>Le contenu s'affiche sans aucun problème ce qui est un GROS problème.
            </p>
        </div>
    </div>
</div>

<div class="container-fluid px-2">
    <div class="row my-5">
        <div class="col border border-2 border-success py-2 bg-dark">
            <h1 class="text-success text-center">Veuillez vous connecter en tant qu'administrateur :</h1>
            <form action="page-admin-securise.php" method="post">
                <div class="border border-1 border-success py-2 px-2 my-2">
                    <label for="sessionLogin" class="text-light">Login :</label>
                    <input type="text" id="sessionLogin" name="sessionLogin" class="form-control mb-2">
                    <label for="sessionPassword" class="text-light">Mot de passe :</label>
                    <input type="text" id="sessionPassword" name="sessionPassword" class="form-control mb-2">
                </div>
                <button id="btnAccesIndirect" type="submit" class="form-control btn btn-outline-success px-4">Envoyer</button>
            </form>
        </div>
        <div class="col mx-5">
            <h1>Comment éviter la faille :</h1>
            <p>
                Dans cet exemple la connection redirige alors vers la page SESSION ADMIN et en affiche son contenu.
                <br>En revanche si les informations sont erronées aucune session admin n'est activée et le contenu de la page SESSION ADMIN est indisponible.
            </p>
            <p>
                Bien que l'accès à cette page soit prévu via cette page de connection il est cependant possible de tenter l'accès en entrant l'URL suivant :
                <br><b>http://localhost/lpgl/FlexSecurity/page/page-admin-securise.php</b>
                <br>Si vous tentez un accès indirect sans initialiser la session administrateur vous constaterai que le contenu n'est pas accessible.
                <br>L'accès à cette page est donc sécurisé via la vérification de la session en cours.
            </p>
        </div>
    </div>
</div>


</body>
</html>
