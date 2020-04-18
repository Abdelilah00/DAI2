<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    include_once('User.php');
    if (User::exist($id)) {
        $user = new User($id);
        $user->delete();
        header('location: ..');
    } else
        header('location: ..?errors=UserNotExist');
}
