<?php
include_once "User.php";
$users = User::getAll();
foreach ($users as $user) {
    echo "<tr>
                <td>" . $user['id'] . "</td>
                <td>" . $user['nom'] . "</td>
                <td>" . $user['prenom'] . "</td>
                <td>" . $user['role'] . "</td>
                <td>" . $user['filiereNom'] . "</td>
                <td>" . $user['email'] . "</td>
                <td>" . $user['numDeTele'] . "</td>
              </tr>";
}
