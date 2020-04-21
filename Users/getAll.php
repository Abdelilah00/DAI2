<?php
include_once "User.php";

class Column
{
    public $name;
    public $visible;

    public function __construct($name, $visible)
    {
        $this->name = $name;
        $this->visible = $visible;
    }
}

function get($search)
{
    $columns = array(
        new Column('Id', true),
        new Column('Nom', true),
        new Column('Prenom', true),
        new Column('Description', true),
        new Column('Filiere', true),
        new Column('Email', true),
        new Column('Téléphone', true),
    );

    if ($_SESSION['role'] == 'Etudiant')
        $columns[6]->visible = false;


    if ($search != null) {
        //get by Email or Tele if not student and set teleCol notVisible
        if ($_SESSION['role'] != 'Etudiant')
            $users = User::getByEmailOrTele($search);
        else {
            $users = User::getByEmail($search);
            $columns[6]->visible = false;
        }
    } else
        $users = User::getAll();


    echo "<tr>";
    foreach ($columns as $column) {
        if ($column->visible == true)
            echo "<th>" . $column->name . "</th>";

    }
    echo "</tr>";

    foreach ($users as $user) {
        echo "<tr>";
        if ($columns[0]->visible == true) echo "<td>" . $user['Id'] . "</td>";
        if ($columns[1]->visible == true) echo "<td>" . $user['Nom'] . "</td>";
        if ($columns[2]->visible == true) echo "<td>" . $user['Prenom'] . "</td>";
        if ($columns[3]->visible == true) echo "<td><input type='hidden' value='" . $user['DescriptionId'] . "'>" . $user['Role'] . "</td>";
        if ($columns[4]->visible == true) echo "<td><input type='hidden' value='" . $user['FiliereId'] . "'>" . $user['FiliereNom'] . "</td>";
        if ($columns[5]->visible == true) echo "<td>" . $user['Email'] . "</td>";
        if ($columns[6]->visible == true) echo "<td>" . $user['NumDeTele'] . "</td>";
        echo "</tr>";
    }
    if (count($users) == 0)
        echo "<tr><td colspan='7'>No Data Found</td></tr>";
}
