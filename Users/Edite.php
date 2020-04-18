<?php
if ($_POST['action'] == 'create')
    include_once('Create.php');
else if ($_POST['action'] == 'update')
    include_once('Update.php');
else if ($_POST['action'] == 'delete')
    include_once('Delete.php');
else
    echo 'no action found';
