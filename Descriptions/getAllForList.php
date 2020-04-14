<?php
include_once "Desciption.php";
$descs = Desciption::getAll();
foreach ($descs as $desc) {
    echo "<option value='" . $desc['Id'] . "'>" . $desc['Role'] . "</option>";
}

