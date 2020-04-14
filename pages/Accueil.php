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
<body onload="addRowHandlers()">
<div class="topnav" id="myTopnav">
    <a class="active">Accueil</a>
    <a href="Profile.php">Mon profile</a>
    <a id="deconnexion" href="SignIn.php">D&eacute;connexion</a>
</div>
<button type="button" id="ajouter" onclick="Ajouter()">Ajouter</button>
<form action="../Users/Search.php" method="get">
    <label>
        <input type="text" placeholder="Search KeyWord" name="id">
    </label>
    <button type="submit">Search</button>
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

    <form class="contenu " action="#.php" method="post">

        <div class="sousConteneur">
            <label> <b>Identifiant</b></label>
            <input type="text" placeholder="CNE ou RPP " id="id" name="id" required>

            <label> <b>Email</b></label>
            <input type="text" placeholder="Modifier Email" id="email" name="email" required>

            <label for="nom"><b>Nom</b></label>
            <input type="text" placeholder="Modifier nom" id="nom" name="nom" required>

            <label for="prenom"><b>Pr&eacute;nom</b></label>
            <input type="text" placeholder="Modifier prenom" id="prenom" name="prenom" required>

            <label for="tlfn"><b>N° Téléphone</b></label>
            <input type="text" placeholder="Modifier numéro de téléphone" id="tlfn" name="tlfn" required>


            <label><b>Profil</b></label>
            <select name="profil" id="profil" onchange="AfficherFilliere(this)">
                <option value="Etudiant" selected>Etudiant</option>
                <option value="Enseignant">Enseignant(e)</option>
                <option value="Fonctionnaire">Fonctionnaire</option>
            </select><br>

            <label><b>Fillière</b></label>
            <select name="Filliere" id="Filliere">
            </select><br>

            <button id="modifier" type="submit" style="margin-left:10%;">Modifier</button>
            <button id="CAjout" type="submit">Ajouter</button>
            <button id="supprimer" type="button" style="background-color: #333">Supprimer</button>

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
