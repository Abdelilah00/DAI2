<?php
if (empty($_SESSION['userId']))
    header('location: SignIn.php');
