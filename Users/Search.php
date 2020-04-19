<?php
include_once "User.php";
$users = User::getBy($_GET['search']);
//Test If Admin Or not
//If Student Or Not
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
