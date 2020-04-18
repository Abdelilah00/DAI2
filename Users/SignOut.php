<?php
session_start();
session_destroy();
setcookie("userId", '', -1);
setcookie("roleId", '', -1);
header('location: ../pages/SignIn.php');
