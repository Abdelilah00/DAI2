<?php
include_once "Filiere.php";
$filieres = Filiere::getAll();
foreach ($filieres as $filiere) {
    echo "<option value='" . $filiere['Id'] . "'>" . $filiere['FiliereNom'] . "</option>";
}
