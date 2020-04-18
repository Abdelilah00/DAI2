<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    if (User::exist($id)) {
        $user = new User($id);
        $user->delete();
    } else
        header('location: errors=userExist');


}
