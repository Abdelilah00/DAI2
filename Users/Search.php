<?php
$users = User::getBy($_GET['search']);
print_r($users);
