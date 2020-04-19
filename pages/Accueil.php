<?php include_once('../Users/IsSignedIn.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/Navbar.css">
    <link rel="stylesheet" href="css/Table.css">
    <link rel="stylesheet" href="css/Accueil.css">
    <script type="text/javascript" src="js/Login.js"></script>
    <script type="text/javascript" src="js/Accueil.js"></script>
</head>
<body onload="ajoutEvenementPourLignesDuTableau()">
<div class="topnav" id="myTopnav">
    <a class="active">Accueil</a>
    <a href="Profile.php">Mon profile</a>
    <a id="deconnexion" href="../Users/SignOut.php">D&eacute;connexion</a>
</div>

<form id="recherche" action="../Users/Search.php" method="get">
    <label>
        <input id="inputRecherche" type="text" placeholder="Mot clé à rechercher" name="search">
    </label>
    <button id="btnRecherche" type="submit">Chercher</button>
    <button type="button" id="ajouter" onclick="Ajouter()">Ajouter</button>
</form>

<table id="utilisateurs">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Descritpion</th>
        <th>Filliere</th>
        <th>Email</th>
        <th>Téléphone</th>
    </tr>
    <?php include_once "../Users/getAll.php" ?>
</table>


<div id="CRUD" class="Panneau">

    <form class="contenu " action="../Users/Edite.php" method="post">

        <div class="sousConteneur">
            <label for="id"> <b>Identifiant</b></label>
            <input type="text" placeholder="CNE ou RPP " id="id" name="id" required>

            <label for="email"> <b>Email</b></label>
            <input type="text" placeholder="Modifier Email" id="email" name="email" required>

            <label for="nom"><b>Nom</b></label>
            <input type="text" placeholder="Modifier nom" id="nom" name="nom" required>

            <label for="prenom"><b>Pr&eacute;nom</b></label>
            <input type="text" placeholder="Modifier prenom" id="prenom" name="prenom" required>

            <label for="tlfn"><b>N° Téléphone</b></label>
            <input type="text" placeholder="Modifier numéro de téléphone" id="tlfn" name="numDeTele" required>


            <label for="profil"><b>Profil</b></label>
            <select name="descriptionId" id="profil" onchange="AfficherFilliere(this)">
                <?php include_once('../Descriptions/getAllForList.php') ?>
            </select><br>

            <div id="FilliereDiv">
                <label for="Filliere"><b>Fillière</b></label>
                <select name="filiereId" id="Filliere">
                    <?php include_once('../Filieres/getAllForList.php') ?>
                </select><br>
            </div>

            <button id="CAjout" type="submit" value="create" name="action">Ajouter</button>
            <button id="modifier" type="submit" value="update" name="action" style="margin-left:10%;">Modifier</button>
            <button id="supprimer" type="submit" value="delete" name="action" style="background-color: #333">Supprimer
            </button>
        </div>

        <div class="sousConteneur" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('CRUD').style.display='none';" class="annuler">
                Annuler
            </button>
        </div>
    </form>
</div>

</body>
</html>
