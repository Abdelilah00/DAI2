<?php
if (isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['password']) && !empty($_POST['password'])) {

    include_once "./User.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (User::userLogin($email, $password)){
        $user = User::getByEmail($email);
        session_start();
        $_SESSION['userId'] = $user->Id;
        $_SESSION['roleId'] = $user->DescriptionId;
        header('location: ../pages/Accueil.php');
    }else
        header('location: ../pages/SignIn.php?errors=UserNotExist');
} else {
    echo "error request parameters";
}
