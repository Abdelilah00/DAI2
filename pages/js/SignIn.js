function nouvelCookie(email,value,days) {
 var jours = 30;
 if (jours) {
   var date = new Date();
   date.setTime(date.getTime()+(days*24*60*60*1000));
   var expires = "; s'expire le="+date.toGMTString(); }
   else var expires = "";
   document.cookie = name+"="+value+expires+"; path=/"; }

function lireCookie(email) {
   var emailSG = email + "=";
   var nul = '';
  if (document.cookie.indexOf(emailSG) == -1)
    return nul;

   var ca = document.cookie.split(';');
  for(var i=0; i<ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
  if (c.indexOf(emailSG) == 0) return c.substring(emailSG.length,c.length); }
    return null; }

function supprimerCookie(email) {
  nouvelCookie(email,"",-1); }

function CreerCoockie(a) {
  var e = document.getElementById('email');
  var m = document.getElementById('mdp');
  var cb = document.getElementById('seRappeler');

  if(e.value.length != 0 && m.value.length != 0 && cb.checked==true ){
    nouvelCookie('email', document.form.email.value);
    nouvelCookie('email', document.form.mdp.value);
  }

}

function supprimerMemoire(a) {
  supprimerCookie('email');


   document.form.email.value = '';
   document.form.mdp.value = ''; }
