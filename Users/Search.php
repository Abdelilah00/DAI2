<?php
include_once "User.php";
$users = User::getBy($_GET['search']);
//Test If Admin Or not
//If Student Or Not
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
