<?php

require_once ('./common/connexionBase.php');

$stmt = $connection->prepare("SELECT * FROM `pays`");
$stmt->execute();
$lesPays = $stmt->fetchall();


?>





<form action="./controller/ajouter.php" method="POST">
    <input type="hidden" name="id" value="">

    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre" value="">

    <label for="annee">Année :</label>
    <input type="text" name="annee" id="annee" value="">

    <label for="synopsis">Synopsis :</label>
    <input type="text" name="synopsis" id="synopsis" value="">

    <label for="url_affiche">Url Affiche :</label>
    <input type="text" name="url_affiche" id="url_affiche" value="">

    <label for="pays">Nom :</label>
    <select  name="pays" id="pays">
        <?php
        foreach ($lesPays as $pays){
            echo '<option value="' . $pays["nom"] . '">' . $pays["nom"] . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="Ajouter">

</form>
