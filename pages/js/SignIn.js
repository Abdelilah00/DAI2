function getCookies() {
    document.getElementById('email').value = getCookie('email');
    document.getElementById('mdp').value = getCookie('mdp');
}

function setCookies() {

    let email = document.getElementById('email').value;
    let mdp = document.getElementById('mdp').value;
    let box = document.getElementById('seRappeler').checked;
    if (box) {
        setCookie('email', email, 30);
        setCookie('mdp', mdp, 30);
    }
    document.getElementsByClassName('contenu').submit();
}

function setCookie(key, value, date) {
    var d = new Date();
    d.setTime(d.getTime() + (date * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = key + "=" + value + ";" + expires + ";path=/";
    console.log(document.cookie);
}

function getCookie(key) {
    var name = key + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
