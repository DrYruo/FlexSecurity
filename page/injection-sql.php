<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Injection SQL</title>
    <link rel="stylesheet" href="../css/bootstrap_sources/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="row bg-dark py-4">
        <div class="col-5 d-flex align-items-center">
            <a type="button" class="btn btn-outline-light px-4 my-auto" href="../index.php">Go Back</a>
        </div>
        <div class="col-7">
            <h1 class="text-light">Injection SQL</h1>
        </div>
    </div>

    <div class="container">
        <div class="row my-5 justify-content-md-center">
            <div class="col-6 text-center py-2 border border-3 border-dark">
                <h1>Injectons du code SQL !</h1>
                <p>Vous allez ici essayer de vous connecter en tant qu'administrateur</p>
                <p>Le login est : <b>admin</b></p>
                <p>Le mot de passe est : <b>admin</b></p>
                <p class="text-lg-start text-lg">Le code coté serveur va effectuer une requête SQL à partir de ces deux informations
                    <br>Si le login est présent en base de donnée et que le mot de passe qui lui est associé est le bon le serveur renverra alors vers une connexion réussie
                    <br>En revanche si ils ne se correspondent pas ou qu'ils ne sont pas présent en base de donnée, ce dernier renverra vers une connexion impossible.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid px-2">
        <div class="row my-5">
            <div class="col border border-2 border-danger py-2 bg-dark">
                <h1 class="text-danger text-center text-danger">Requête avec faille</h1>
                <form action="submitted-injection-sql.php" method="get">
                    <div class="border border-1 border-danger py-2 px-2 my-2">
                        <label for="failleName" class="text-light">Login :</label>
                        <input type="text" id="failleName" name="failleName" class="form-control mb-2">
                        <label for="faillePassword" class="text-light">Mot de passe :</label>
                        <input type="text" id="faillePassword" name="faillePassword" class="form-control mb-2">
                    </div>
                    <button id="btnInjectionSqlDanger" type="submit" class="form-control btn btn-outline-danger px-4">Envoyer</button>
                </form>
            </div>

            <div class="col mx-5">
                <h1>Explication de la faille :</h1>
                <p>Pour exploiter la faille dans ce cas il est possible d'injecter directement du code SQL depuis le champ <b>Login</b>.</p>
                <p>La requête SQL exécutée est la suivante :
                    <br><b>SELECT name, password FROM user WHERE name = '</b><i>variable récupéré de login</i><b>' and password = '</b><i>variable récupéré de mot de passe</i><b>';</b>
                </p>
                <p>Si l'on écrit : <b>admin';--</b> dans le champ Login, la requête deviendra alors la suivante :
                    <br><b>SELECT name, password FROM user WHERE name = 'admin';</b><i>--' and password = ';</i>
                </p>
                <p>La partie de la requête exigeant le mot de passe devient alors un commentaire dans le code et n'est donc plus utilisée.
                    <br>Le mot de passe devient inutile, seul le Login doit être valide pour que la connexion puisse s'établir.
                </p>
            </div>
        </div>

        <div class="row my-5">
            <div class="col border border-2 border-success py-2 bg-dark">
                <h1 class="text-center text-success">Requête sécurisée</h1>
                <form action="submitted-injection-sql.php" method="get">
                    <div class="border border-1 border-success py-2 px-2 my-2">
                        <label for="name" class="text-light">Login :</label>
                        <input type="text" id="name" name="name" class="form-control mb-2">
                        <label for="password" class="text-light">Mot de passe :</label>
                        <input type="text" id="password" name="password" class="form-control mb-2">
                    </div>
                    <button id="btnInjectionSqlSuccess" type="submit" class="form-control btn btn-outline-success px-4">Envoyer</button>
                </form>
            </div>
            <div class="col mx-5">
                <h1>Comment éviter la faille :</h1>
                <p>Pour éviter la faille il est possible d'utiliser une requête préparée.</p>
                <p>La requête SQL exécutée est la suivante :
                    <br><b>SELECT name, password FROM user WHERE name = ? and password = ?';</b>
                </p>
                <p>Ici les variables récupérées ne sont pas directement intégrées à la requête, elles subissent d'abord un traitement.
                    <br>Ce dernier va permettre d'échaper les caractères tels que les <b>'</b> ou encore les <b>"</b> afin d'éviter toutes injections de code.
                    <br>Si l'on écrit : <b>admin';--</b> dans le champ Login, la requête deviendra alors la suivante :
                    <br><b>SELECT name, password FROM user WHERE name = '</b><i>admin\';--</i><b>' and password = ';</b>
                </p>
                <p>La partie de la requête exigeant le mot de passe reste donc utilisée.</p>
            </div>
        </div>
    </div>
</div>

<script src="../script/injectionSql.js"></script>
</body>
</html>