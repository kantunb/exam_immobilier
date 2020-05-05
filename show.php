<?php

require_once './partials/dbCall.php';

$request = "SELECT * FROM logement WHERE id_logement = :id";
$response = $bdd->prepare($request);
$response->execute([
    ':id' => $_GET['id']
]);
$logement = $response->fetch(PDO::FETCH_ASSOC);


// var_dump($_GET);
// var_dump($logement);

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Exam PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <header>

        <?php include './partials/navbar.php' ?>

    </header>
    <main>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h2><?= $logement['titre'] ?></h2>
                                <div class="car-body">
                                    <img src="./img/<?= $logement['photo'] ?>" class="img-fluid" alt="Photo de <?= $logement['titre'] ?>">
                                </div>
                                <p>
                                    <strong>Coordonnées</strong><br>
                                    <ul>
                                        <li>Adresse : <?= $logement['adresse'] ?></li>
                                        <li>Code postal : <?= $logement['cp'] ?></li>
                                        <li>Ville : <?= $logement['ville'] ?></li>
                                    </ul>
                                </p>
                                <p>
                                    <strong>Informations</strong>
                                    <ul>
                                        <li>Type: <?= $logement['type'] ?></li>
                                        <li>Surface: <?= $logement['surface'] ?> m2</li>
                                        <li>Prix: <?= $logement['prix'] ?> euros</li>
                                        <li>Description:<br>
                                            <?= $logement['description'] ?></li>
                                    </ul>
                                </p>
                                <div class="d-flex justify-content-center">
                                    <a href="#"><button type="button" class="btn btn-primary d-none">+ d'info</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </main>
    <footer>

        <?php include './partials/footer.php' ?>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>