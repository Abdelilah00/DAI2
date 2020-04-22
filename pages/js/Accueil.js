function ajoutEvenementPourLignesDuTableau() {
    var table = document.getElementById("utilisateurs");
    var rows = table.getElementsByTagName("tr");
    for (i = 0; i < rows.length; i++) {
        var currentRow = table.rows[i];
        var createClickHandler =
            function (row) {
                return function () {
                    ModifierOuSuuprimer(row);
                };
            };
        currentRow.onclick = createClickHandler(currentRow);
    }
}


function ModifierOuSuuprimer(row) {

    var p = document.getElementById('CRUD');
    document.getElementById('xid').style.display = "none";
    document.getElementById('nom').value = row.getElementsByTagName("td")[1].innerHTML;
    document.getElementById('prenom').value = row.getElementsByTagName("td")[2].innerHTML;
    document.getElementById('profil').value = row.getElementsByTagName("td")[3].firstChild.value;
    document.getElementById('Filliere').value = row.getElementsByTagName("td")[4].firstChild.value;
    document.getElementById('email').value = row.getElementsByTagName("td")[5].innerHTML;
    if (row.getElementsByTagName("td")[6] !== undefined) document.getElementById('tlfn').value = row.getElementsByTagName("td")[6].innerHTML;

    document.getElementById('CAjout').style.display = "none";
    document.getElementById('modifier').style.display = "inline-block";
    document.getElementById('supprimer').style.display = "inline-block";

    p.style.display = 'block';
}


function Ajouter() {
    var p = document.getElementById('CRUD');
    document.getElementById('id').value = "";
    document.getElementById('nom').value = "";
    document.getElementById('prenom').value = "";
    document.getElementById('profil').value = "";
    document.getElementById('Filliere').value = "";
    document.getElementById('email').value = "";
    if (document.getElementById('tlfn') !== undefined) document.getElementById('tlfn').value = "";
    document.getElementById('CAjout').style.display = "inline-block";
    document.getElementById('modifier').style.display = "none";
    document.getElementById('supprimer').style.display = "none";
    p.style.display = 'block';
}
