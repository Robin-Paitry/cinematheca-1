<?php

include($_SERVER['DOCUMENT_ROOT'] . '/projet2/cinematheca/common/connexionBase.php');


// Selection dans la base de donnée des éléments à ressortir pour la recherche
    $champRecherche = '%'.$_POST['cherche'].'%';

    $stmt = $connection->prepare("SELECT id, titre, url_affiche FROM film WHERE titre like :titre");
    $stmt->bindParam(':titre', $champRecherche);
    $stmt->execute();
    $filmCherche = $stmt->fetchall();

// Encodage json pour le récupérer en javascript
    echo json_encode($filmCherche);

