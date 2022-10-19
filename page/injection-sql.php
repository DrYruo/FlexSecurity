<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Injection SQL</title>
    <link rel="stylesheet" href="../css/bootstrap_sources/bootstrap.min.css">
</head>
<body onload="initInjectionSql()">

<div class="container-fluid">
    <div class="row bg-info py-4">
        <div class="col-5 d-flex align-items-center">
            <a type="button" class="btn btn-outline-dark px-4 my-auto" href="../index.php">Go Back</a>
        </div>
        <div class="col-7">
            <h1>Injection SQL</h1>
        </div>
    </div>

    <div class="container-fluid px-2">
        <div class="row my-5">
            <div class="col border border-2 border-danger py-2 bg-dark">
                <h1 class="text-danger text-center text-danger">Requête avec faille</h1>
                <div class="border border-1 border-danger py-2 px-2 my-2">
                    <p class="text-light">Pour obtenir la liste des élèves veuillez taper le mot de passe administrateur :</p>
                    <input class="form-control mb-2" type="text">
                </div>
                <button id="btnInjectionSqlDanger" type="button" class="form-control btn btn-outline-danger px-4">Envoyer</button>
            </div>
            <div class="col mx-5">
                <h1>Explication de la faille :</h1>
                <p>zebqeriuhi rhieurhg uieiurgh iuherg erg errg ezebzehzegze</p>
            </div>
        </div>

        <div class="row my-5">
            <div class="col border border-2 border-success py-2 bg-dark">
                <h1 class="text-center text-success">Requête avec faille</h1>
                <div class="border border-1 border-success py-2 px-2 my-2">
                    <p class="text-light">Pour obtenir la liste des élèves veuillez taper le mot de passe administrateur :</p>
                    <input class="form-control mb-2" type="text">
                </div>
                <button id="btnInjectionSqlSafe" type="button" class="form-control btn btn-outline-success px-4">Envoyer</button>
            </div>
            <div class="col mx-5">
                <h1>Comment éviter la faille :</h1>
                <p>zebqeriuhi rhieurhg uieiurgh iuherg erg errg ezebzehzegze</p>
            </div>
        </div>
    </div>
</div>

<script src="../script/injectionSql.js"></script>
</body>
</html>