<!DOCTYPE html>
<?php
require_once '../back/Bdd.php';
$BDD = new Bdd();

function getAdminRightWithFault(Bdd $bdd, String $name, String $password) {
    try {
        $sql = "SELECT name, password FROM user WHERE name = '$name' and password ='$password'";
        $req = $bdd->getBdd()->query($sql, PDO::FETCH_OBJ);
        $res = $req->fetch(PDO::FETCH_OBJ);
        if (!empty($res)) {
            echo '<p class="text-success fs-3"> Bienvenue '.$res->name.' !</p>';
        } else {
            echo '<p class="text-danger fs-3"> Connection impossible, les identifiants ne sont pas bons !';
        }
    } catch(Exception $e) {
        echo '<p class="text-danger fs-3"> Connection impossible, les identifiants ne sont pas bons !';
    }
}

function getAdminRight(Bdd $bdd, String $name, String $password)
{
    try {
        $sql = "SELECT name, password FROM user WHERE name = ? and password = ?";
        $req = $bdd->preparerRequete($sql);
        $req->bindValue(1, $name, PDO::PARAM_STR);
        $req->bindValue(2, $password, PDO::PARAM_STR);
        $req->execute();
        $res = $req->fetch(PDO::FETCH_OBJ);
        if (!empty($res)) {
            echo '<p class="text-success fs-3"> Bienvenue ' . $res->name . ' !</p>';
        } else {
            echo '<p class="text-danger fs-3"> Connection impossible, les identifiants ne sont pas bons !</p>;
                    <p class="text-danger fs-3">Pas d\'injection SQL possible cette fois !</p>';
        }
    } catch (Exception $e) {
        echo '<p class="text-danger fs-3"> Connection impossible, les identifiants ne sont pas bons !</p>;
                    <p class="text-danger fs-3">Pas d\'injection SQL possible cette fois !</p>';
    }
}
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Injection SQL</title>
    <link rel="stylesheet" href="../css/bootstrap_sources/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="row bg-dark py-4">
        <div class="col-5 d-flex align-items-center">
            <a type="button" class="btn btn-outline-light px-4 my-auto" href="./injection-sql.php">Go Back</a>
        </div>
        <div class="col-7">
            <h1 class="text-light">Injection SQL</h1>
        </div>
    </div>

    <div class="row my-5 justify-content-md-center">
        <div class="col-6 text-center my-5 py-5 border border-3 border-dark">
            <?php
            if(isset($_GET['failleName'])) {
                $name = $_GET['failleName'];
                $password = $_GET['faillePassword'];
                getAdminRightWithFault($BDD, $name, $password);
            }

            if(isset($_GET['name'])) {
                $name = $_GET['name'];
                $password = $_GET['password'];
                getAdminRight($BDD, $name, $password);
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>


