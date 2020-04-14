<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/Navbar.css" rel="stylesheet">
    <link href="css/SignIn.css" rel="stylesheet">
</head>

<body>

<div class="topnav" id="myTopnav">
    <a class="active">Accueil</a>
</div>

<div class="conteneur">

    <form class="contenu" action="../Users/SignIn.php" method="post">
        <?php
        if (isset($_GET["errors"]))
            echo "      <div id='errors'>
                            <p style='margin: auto'>
                                User Not Exist
                            </p>
            </div>";
        ?>

        <div class="conteneurImg">
            <img alt="Bienvenue!" class="logo" src="src/ESTO.svg">
        </div>

        <div class="sousConteneur">
            <label> <b>Email</b></label>
            <input name="email" placeholder="Veuillez saisir otre Email" required type="text">

            <label><b>Mot de passe</b></label>
            <input name="password" placeholder="Veuillez sasir votre mot de passe" required type="password">

            <button type="submit">Se connecter</button>
            <label>
                <input checked="checked" name="remember" type="checkbox"> Se rappeler de moi
            </label>
        </div>

        <div class="sousConteneur" style="background-color:#f1f1f1; height: 20px; ">
            <span class="psw">Pas encore inscrit? <a href="SignUp.php">Inscrivez-vous</a></span>
        </div>
    </form>
</div>
</body>
</html>
