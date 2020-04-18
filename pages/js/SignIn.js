function AfficherFilliere(element) {
    document.getElementById("Filliere").style.display = element.value == "Etudiant" ? 'block' : 'none';
}

function resetFilliere() {
    var s = document.getElementById("profil");
    s.selectedIndex = s.options[0];
}



function mdpIdentiques(form) {
                mdp = form.mdp.value;
                cmdp = form.cmdp.value;

                if (mdp == '')
                    alert ("Veuillez saisir un mot de passe");

                else if (cmdp == '')
                    alert ("Veuillez confirmer votre mot de passe");

                else if (mdp != cmdp) {
                    alert ("\n Veuillez saisir des mots de passe identiques")
                    return false;
                }

                else{

                    return true;
                }
            }
