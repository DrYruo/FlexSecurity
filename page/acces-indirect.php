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
            <p class="text-lg-start text-lg">Blabla zgzgzeg
                <br>zrbqetz
                <br>qertnqetn
            </p>
            <a href="../component/destroy-session.php" class="btn btn-outline-primary px-4">Reset la session en cours</a>
        </div>
    </div>
</div>

<div class="container-fluid px-2">
    <div class="row my-5">
        <div class="col border border-2 border-primary py-2 bg-dark">
            <h1 class="text-primary text-center">Veuillez vous connecter en tant qu'administrateur :</h1>
            <form action="page-admin-securise.php" method="post">
                <div class="border border-1 border-primary py-2 px-2 my-2">
                    <label for="sessionLogin" class="text-light">Login :</label>
                    <input type="text" id="sessionLogin" name="sessionLogin" class="form-control mb-2">
                    <label for="sessionPassword" class="text-light">Mot de passe :</label>
                    <input type="text" id="sessionPassword" name="sessionPassword" class="form-control mb-2">
                </div>
                <button id="btnAccesIndirect" type="submit" class="form-control btn btn-outline-primary px-4">Envoyer</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>
