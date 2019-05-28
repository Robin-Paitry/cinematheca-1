<?php

include($_SERVER['DOCUMENT_ROOT'] . '/projet2/cinematheca/common/connexionBase.php');


//require_once ('../common/connexionBase.php');


$titre=$_POST['titre'];
$annee=$_POST['annee'];
$synopsis = $_POST['synopsis'];
$url_affiche = $_POST['url_affiche'];

$pays = $_POST['pays'];

$selectPays = "SELECT id FROM pays WHERE nom = '". $pays ."'";

$stmt = $connection->prepare("INSERT INTO `film` (`titre`, `annee`, `synopsis`, `url_affiche`, `pays_id`) VALUES (:titre, :annee, :synopsis, :url_affiche,(". $selectPays. "))");



$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':annee', $annee);
$stmt->bindParam(':synopsis', $synopsis);
$stmt->bindParam(':url_affiche', $url_affiche);


$stmt->execute();

header('location:../index.php');



