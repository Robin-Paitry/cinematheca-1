<?php

include($_SERVER['DOCUMENT_ROOT'] . '/projet2/cinematheca/common/connexionBase.php');

function recherche(){
    $champRecherche = $_POST['recherche'];

    $stmt = $connection->prepare("SELECT FROM film WHERE titre= :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
