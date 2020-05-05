<?php


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
</head>

<body>
    <header>

    </header>
    <main>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="form-group">
                        <label for="">Ajouter un logement</label>
                        <form action="./action/create.php" method="POST" enctype="multipart/form-data" >

                            <label id="titre" class="form-text text-muted">Titre</label>
                            <input type="text" class="form-control" name="titre" aria-describedby="titre" value="" required>

                            <label id="adresse" class="form-text text-muted">Adresse</label>
                            <input type="text" class="form-control" name="adresse" aria-describedby="adresse" required>

                            <label id="ville" class="form-text text-muted">Ville</label>
                            <input type="text" class="form-control" name="ville" aria-describedby="ville" required>

                            <label id="cp" class="form-text text-muted">Code postal</label>
                            <input type="number" class="form-control" name="cp" pattern="[0-9]{5}" aria-describedby="code postal" required>

                            <label id="surface" class="form-text text-muted">Surface</label>
                            <input type="number" class="form-control" name="surface" step=1 aria-describedby="surface" required>

                            <label id="prix" class="form-text text-muted">Prix</label>
                            <input type="number" class="form-control" name="prix" step=1 aria-describedby="prix" required>

                            <label for="photo" class="form-text text-muted">Photo</label>
                            <input type="file" class="form-control-file" name="photo" accept=".jpg, .jpeg, image/jpg, image/jpeg" aria-describedby="photo">

                            <label id="type" class="form-text text-muted">Type</label>
                            <select class="form-control" name="type" aria-describedby="type" required>
                                <option value="">-- Choisir --</option>
                                <option value="location">Location</option>
                                <option value="vente">Vente</option>
                            </select>

                            <label for="description" class="form-text text-muted">Description</label>
                            <textarea class="form-control" name="description" minlength="6" aria-describedby="description"></textarea>


                            <input class="btn btn-primary mt-4" type="submit" value="Ajouter un logement"> </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>