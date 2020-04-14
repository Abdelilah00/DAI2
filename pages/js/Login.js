function AfficherFilliere(element) {
    document.getElementById("FilliereDiv").style.display = element.options[element.selectedIndex].text === "Etudiant" ? 'block' : 'none';
}

function resetFilliere() {
    var s = document.getElementById("profil");
    s.selectedIndex = s.options[0];
}
