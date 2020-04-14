<?php
include_once "User.php";
$users = User::getAll();
foreach ($users as $user) {
    echo "<tr>
                <td>" . $user['Id'] . "</td>
                <td>" . $user['Nom'] . "</td>
                <td>" . $user['Prenom'] . "</td>
                <td>" . $user['DescriptionId'] . "</td>
                <td>" . $user['FiliereId'] . "</td>
                <td>" . $user['Email'] . "</td>
                <td>" . $user['NumDeTele'] . "</td>
              </tr>";
}
