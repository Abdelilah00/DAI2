<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/Navbar.css">
    <link href="css/SignIn.css" rel="stylesheet">
    <script type="text/javascript" src="js/Login.js">

    </script>
</head>
<body onload="resetFilliere()">
<div class="topnav" id="myTopnav">
    <a class="active">Accueil</a>


</div>


<div class="conteneur">

    <form class="contenu" method="post" action="../Users/SignUp.php">
        <div class="conteneurImg">
            <img alt="Bienvenue!" class="logo" src="src/ESTO.svg">
        </div>

        <?php
        if (isset($_GET["errors"]))
            echo "      <div id='errors' >
                    <p style='margin: auto'>
                        User already exist
                    </p>
            </div>";
        ?>

        <div class="sousConteneur">
            <label> <b>Identifiant</b></label>
            <input type="text" placeholder="CNE ou RPP " name="id" required>

            <label> <b>Email</b></label>
            <input type="text" placeholder="Veuillez saisir votre Email" name="email" required>

            <label><b>Nom</b></label>
            <input type="text" placeholder="Veuillez saisir votre nom" name="nom" required>

            <label><b>Pr&eacute;nom</b></label>
            <input type="text" placeholder="Veuillez saisir votre prenom" name="prenom" required>

            <label><b>N° Téléphone</b></label>
            <input type="text" placeholder="Veuillez saisir votre numéro de téléphone" name="numDeTele" required>


            <label><b>Précisez votre profil</b></label>
            <select name="descriptionId" id="profil" onchange="AfficherFilliere(this)">
                <?php include_once('../Descriptions/getAllForList.php') ?>
            </select><br>
            <div id="FilliereDiv">
                <label><b>Fillière</b></label>
                <select name="filiereId" id="Filliere">
                    <?php include_once('../Filieres/getAllForList.php') ?>
                </select>
            </div>


            <label><b>Saisir mot de passe</b></label>
            <input type="password" placeholder="Veuillez saisir votre mot de passe" name="password" required>

            <label><b>Confirmer mot de passe</b></label>
            <input type="password" placeholder="Veuillez confirmer votre mot de passe" name="cpsw" required>

            <button type="submit">Inscription</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Se rappeler de moi
            </label>
        </div>

        <div class="sousConteneur" style="background-color:#f1f1f1; height: 20px; ">
            <span class="psw">Vous avez déja un compte? <a href="SignIn.php">Connectez-vous</a></span>
        </div>
    </form>
</div>
</body>
</html>
