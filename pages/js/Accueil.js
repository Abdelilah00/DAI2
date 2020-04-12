
function addRowHandlers() {
    var table = document.getElementById("utilisateurs");
    var rows = table.getElementsByTagName("tr");
    for (i = 0; i < rows.length; i++) {
        var currentRow = table.rows[i];
        var createClickHandler =
            function(row)
            {
                return function() {
                                        RemplirePanneau(row);
                                 };
            };
        currentRow.onclick = createClickHandler(currentRow);
    }
}


function RemplirePanneau(row) {

  var p  =document.getElementById('CRUD');
  document.getElementById('id').value = row.getElementsByTagName("td")[0].innerHTML;
document.getElementById('nom').value = row.getElementsByTagName("td")[1].innerHTML;
document.getElementById('prenom').value = row.getElementsByTagName("td")[2].innerHTML;
 document.getElementById('profil').value = row.getElementsByTagName("td")[3].innerHTML;
 document.getElementById('Filliere').value = row.getElementsByTagName("td")[4].innerHTML;
   document.getElementById('email').value = row.getElementsByTagName("td")[5].innerHTML;
 document.getElementById('tlfn').value = row.getElementsByTagName("td")[6].innerHTML;
  p.style.display='block';
}
