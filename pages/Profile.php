<?php include_once('../Users/IsSignedIn.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/Profile.css">
    <link rel="stylesheet" href="css/Navbar.css">
</head>
<body>
<div class="topnav" id="myTopnav">
    <a href="Accueil.php">Accueil</a>
    <a class="active">Mon profile</a>
    <a id="deconnexion">D&eacute;connexion</a>
</div>

<div id="Profile" class="Panneau" style="display:block">

    <form class="contenu " action="#.php" method="post">

        <div class="sousConteneur">
            <?php include_once '../Users/User.php';
            session_start();
            $user = new User($_SESSION['userId']);

            echo "<h1>Informations personnelles</h1>
            <label for='idText'> Identifiant</label>
            <h4 id='idText'>" . $user->Id . "</h4>
            <hr>

            <label for='nomText'> Nom</label>
            <h4 id='nomText'>" . $user->Nom . "</h4>
            <hr>

            <label for='PrenomText'>Pr&eacute;nom</label>
            <h4 id='PrenomText'>" . $user->Prenom . "</h4>
            <hr>

            <label for='profilLabel'>Profil</label>
            <h4 id='profilLabel'>" . $user->DescriptionNom . "</h4>
            <hr>

            <label for='filliereLabel'>Fillière</label>
            <h4 id='filliereLabel'>" . $user->FiliereNom . "</h4>
            <hr>

            <label for='emailLabel'>Email</label>
            <h4 id='emailLabel'>" . $user->Email . "</h4>
            <hr>

            <label for='tlfnLabel'>N° Téléphone</label>
            <h4 id='tlfnLabel'>" . $user->NumDeTele . "</h4>
            <hr>";
            ?>

            <button id="modifier" type="button" style="margin-left:30%;"
                    onclick="document.getElementById('Profile').style.display='none';
                    document.getElementById('ModifierProfile').style.display='block';">
                Modifier
            </button>
        </div>
    </form>
</div>


<div id="ModifierProfile" class="Panneau" style="display:none;">

    <form class="contenu " action="../Users/Update.php" method="post">

        <div class="sousConteneur">
            <?php include_once '../Users/User.php';
            $user = new User($_SESSION['userId']);

            echo "<label> <b>Identifiant</b></label>
            <input type='text' placeholder='CNE ou RPP ' id='id' name='id' required>

            <label for='email'> <b>Email</b></label>
            <input type='text' placeholder='Modifier Email' id='email' name='email' required>

            <label for='nom'><b>Nom</b></label>
            <input type='text' placeholder='Modifier nom' id='nom' name='nom' required>

            <label for='prenom'><b>Pr&eacute;nom</b></label>
            <input type='text' placeholder='Modifier prenom' id='prenom' name='prenom' required>

            <label for='tlfn'><b>N° Téléphone</b></label>
            <input type='text' placeholder='Modifier numéro de téléphone' id='tlfn' name='numdeTele' required>


            <label for='profil'><b>Profil</b></label>
            <select name='descriptionId' id='profil' onchange='AfficherFilliere(this)'>
                " . xx . "
            </select><br>

            <label for='Filliere'><b>Fillière</b></label>
            <select name='filliereId' id='Filliere'>
                " . xx . "
            </select><br>
            ";
            ?>
            <button id="modifier" type="submit" style="margin-left:30%;">Valider</button>

        </div>

        <div class="sousConteneur" style="background-color:#f1f1f1">
            <button type="button"
                    onclick="document.getElementById('ModifierProfile').style.display='none';document.getElementById('Profile').style.display='block'"
                    class="annuler">Annuler
            </button>
        </div>
    </form>
</div>
</body>
</html>
