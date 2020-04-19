<?php
include_once "User.php";

if (isset($_GET['search']))
    $users = User::getBy($_GET['search']);
else
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
