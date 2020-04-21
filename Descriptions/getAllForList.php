<?php
include_once "Desciption.php";
function getAllDesciptionsForList($selected)
{
    echo $selected;
    $descs = Desciption::getAll();
    foreach ($descs as $desc) {
        echo "<option value='" . $desc['Id'] . "'";
        echo $desc['Id'] == $selected ? 'selected' : null;
        echo ">" . $desc['Role'] . "</option>";
    }
}


