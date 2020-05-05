<?php

require_once '../partials/dbCall.php';

$request = "INSERT INTO ";
$response = $bdd->prepare($request);
$response->execute();
$logements = $response->fetchAll(PDO::FETCH_ASSOC);


// var_dump($_POST);

// var_dump($_FILES);

// var_dump(pathinfo($_FILES['photo']['name']));

// Fonction pour tester le type de fichier (extension et mime)
function photoCheckFormat() {
    // Récupération des info du $_FILES
    $pathinfoName = pathinfo($_FILES['photo']['name']);
    $pathinfoExtension = $pathinfoName['extension'];
    $pathinfoMime = $_FILES['photo']['type'];

    $extensionsOK = ['jpg', 'jpeg'];
    $mimeOk = ['image/jpg', 'image/jpeg'];

    return (in_array($pathinfoExtension, $extensionsOK) && in_array($pathinfoMime, $mimeOk));
}
var_dump('photo format' .  photoCheckFormat());

// Fonction pour controler la taille de la photo uploadée
function photoCheckSize() {
    $imageSize = $_FILES['photo']['size'];
    return ($imageSize <= 3750000);
}
var_dump('photoSize'.photoCheckSize());

// Fonction pour enregistrer le fichier

function savePhoto() {
    $pathinfoName = pathinfo($_FILES['photo']['name']);
    $photoExtension = $pathinfoName['extension'];

    // Utilisation d'un id unique pour renommer le fichier
    $photoNewName = 'logement_' . time() . '.' . $photoExtension;

    move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__ . '../../img/' . $photoNewName);

    return $photoNewName;
}

// Fonction pour couper texte trop long


if (!photoCheckFormat()) {
    echo "Le format que vous tentez d'envoyer n'est pas authorisé";
} else {
    if (!photoCheckSize()) {
        echo "Le fichier est trop volumineux";
    }
    else {
        $photoName = savePhoto();

        $request = "INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type, description)
            VALUES ( :titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)";
        $response = $bdd->prepare($request);
        $response->execute([
            'titre'         => $_POST['titre'],
            'adresse'       => $_POST['adresse'],
            'ville'         => $_POST['ville'],
            'cp'            => $_POST['cp'],
            'surface'       => $_POST['surface'],
            'prix'          => $_POST['prix'],
            'photo'         => $photoName,
            'type'          => $_POST['type'],
            'description'   => $_POST['description'],
        ]);
        echo "Tout est OK";
        header('Location: ../index.php');
    }
}
