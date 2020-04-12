
function addRowHandlers() {
    var table = document.getElementById("utilisateurs");
    var rows = table.getElementsByTagName("tr");
    for (i = 0; i < rows.length; i++) {
        var currentRow = table.rows[i];
        var createClickHandler =
            function(row)
            {
                return function() {
                                        ModifierOuSuuprimer(row);
                                 };
            };
        currentRow.onclick = createClickHandler(currentRow);
    }
}


function ModifierOuSuuprimer(row) {

  var p  =document.getElementById('CRUD');
  document.getElementById('id').value = row.getElementsByTagName("td")[0].innerHTML;
document.getElementById('nom').value = row.getElementsByTagName("td")[1].innerHTML;
document.getElementById('prenom').value = row.getElementsByTagName("td")[2].innerHTML;
 document.getElementById('profil').value = row.getElementsByTagName("td")[3].innerHTML;
 document.getElementById('Filliere').value = row.getElementsByTagName("td")[4].innerHTML;
   document.getElementById('email').value = row.getElementsByTagName("td")[5].innerHTML;
 document.getElementById('tlfn').value = row.getElementsByTagName("td")[6].innerHTML;
 document.getElementById('CAjout').style.display="none";
 document.getElementById('modifier').style.display="inline-block";
 document.getElementById('supprimer').style.display="inline-block";

  p.style.display='block';
}


function Ajouter(){
    var p  =document.getElementById('CRUD');
    document.getElementById('CAjout').style.display="inline-block";
    document.getElementById('modifier').style.display="none";
    document.getElementById('supprimer').style.display="none";
    p.style.display='block';
}
