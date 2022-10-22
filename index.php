<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Flex Security</title>
    <link rel="stylesheet" href="css/bootstrap_sources/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="row bg-dark py-4">
        <div class="col">
            <h1 class="text-center text-light">Security Project</h1>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="https://fakeimg.pl/250x150/?text=InjectionSQL" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Injection SQL</h5>
                    <p class="card-text">Faille permettant d'injecter du code SQL</p>
                    <a href="page/injection-sql.php" class="btn btn-primary">Observons cela</a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="https://fakeimg.pl/250x150/?text=FailleXSS" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Faille XSS</h5>
                    <p class="card-text">Faille permettant d'injecter du code JavaScript</p>
                    <a href="page/faille-xss.php" class="btn btn-primary">Observons cela</a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="https://fakeimg.pl/250x150/?text=AccesIndirect" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Accès Indirect</h5>
                    <p class="card-text">Faille permettant un accès non autorisé à une page</p>
                    <a href="page/acces-indirect.php" class="btn btn-primary">Observons cela</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>