<?php
session_start();
if (empty($_SESSION['userId']))
    header('location: SignIn.php');
