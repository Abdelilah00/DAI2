<?php

if (isset($_POST['id']) && !empty($_POST['id'])
    /*    && isset($_POST['mdp']) && !empty($_POST['mdp'])*/
    && isset($_POST['nom']) && !empty($_POST['nom'])
    && isset($_POST['prenom']) && !empty($_POST['prenom'])
    && isset($_POST['numDeTele']) && !empty($_POST['numDeTele'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['descriptionId']) && !empty($_POST['descriptionId'])
    /*    && isset($_POST['filiereId']) && !empty($_POST['filiereId'])*/
) {

    $password = isset($_POST['mdp']) ? $_POST['mdp'] : null;
    $filierId = isset($_POST['filiereId']) ? $_POST['filiereId'] : null;

    include_once "User.php";
    if (User::exist($_POST['id']))
        header('location: errors=userExist');


    $user = new User(null);
    $user->Id = $_POST['id'];
    $user->Password = password_hash($password, PASSWORD_DEFAULT);
    $user->Nom = $_POST['nom'];
    $user->Prenom = $_POST['prenom'];
    $user->NumDeTele = $_POST['numDeTele'];
    $user->Email = $_POST['email'];
    $user->DescriptionId = $_POST['descriptionId'];
    $user->FiliereId = $filierId;
    $user->add();

    session_start();
    $_SESSION['userId'] = $user->Id;
    $_SESSION['roleId'] = $user->DescriptionId;
    header('location: ../pages/Accueil.php');
} else {
    echo "error request parameters";
}
