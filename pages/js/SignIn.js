function AfficherFilliere(element) {
    document.getElementById("Filliere").style.display = element.value == "Etudiant" ? 'block' : 'none';
}

function resetFilliere() {
    var s = document.getElementById("profil");
    s.selectedIndex = s.options[0];
}

function myFunction() {
    alert("I am an alert box!");
}

function tableClick(evt) {
    var cellule = evt.target || evt.srcElement;
    if (cellule.name == 'modifier') {
    }
}
