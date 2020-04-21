<?php

if (isset($_POST['id']) && !empty($_POST['id'])
    /*    && isset($_POST['password']) && !empty($_POST['password'])*/
    && isset($_POST['nom']) && !empty($_POST['nom'])
    && isset($_POST['prenom']) && !empty($_POST['prenom'])
    && isset($_POST['numDeTele']) && !empty($_POST['numDeTele'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['descriptionId']) && !empty($_POST['descriptionId'])
    /*    && isset($_POST['filiereId']) && !empty($_POST['filiereId'])*/
) {

    include_once "User.php";
    if (User::exist($_POST['id']))
        header('location: errors=userExist');

    $user = new User($_POST['id']);
    $user->Password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user->Nom = $_POST['nom'];
    $user->Prenom = $_POST['prenom'];
    $user->NumDeTele = $_POST['numDeTele'];
    $user->Email = $_POST['email'];
    $user->DescriptionId = $_POST['descriptionId'];
    $user->FiliereId = $_POST['filiereId'];
    $user->update();

    session_start();
    $_SESSION['userId'] = $user->Id;
    $_SESSION['roleId'] = $user->DescriptionId;
    header('location: ../pages/Accueil.php');
} else {
    echo "error request parameters";
}
