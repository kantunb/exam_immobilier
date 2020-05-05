<?php

require_once '../partials/dbCall.php';

$request = "INSERT INTO ";
$response = $bdd->prepare($request);
$response->execute();
$logements = $response->fetchAll(PDO::FETCH_ASSOC);

function testEnvoiDonnées() {
    return ($_POST && $_FILES);
}

if (testEnvoiDonnées()) {
    echo "Il y a eu un problème lors de l'envoi des données";
}
else {
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
        'photo'        => $_POST['photo'],
        'type'          => $_POST['type'],
        'description'   => $_POST['description'],
    ]);
}

var_dump($logements);
