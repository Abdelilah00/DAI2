<div class="topnav" id="myTopnav">
    <a href="Accueil.php">Accueil</a>
    <a href="Profile.php">Mon profile</a>
    <a id="deconnexion" href="../Users/SignOut.php">D&eacute;connexion</a>
</div>
<script>
    let link = window.location.href;
    if (link.includes('Accueil.php'))
        document.getElementById('myTopnav').getElementsByTagName('a')[0].classList = "active";
    else
        document.getElementById('myTopnav').getElementsByTagName('a')[1].classList = "active";
</script>
