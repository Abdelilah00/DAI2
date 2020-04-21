<?php
include_once "Filiere.php";

function getAllFilieresForList($selected)
{
    $filieres = Filiere::getAll();
    foreach ($filieres as $filiere) {
        echo "<option value='" . $filiere['Id'] . "'";
        echo $filiere['Id'] == $selected ? 'selected' : null;
        echo ">" . $filiere['FiliereNom'] . "</option>";
    }
}
