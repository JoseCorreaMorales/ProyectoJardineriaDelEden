function validar(){
    var user = document.getElementById("user");
    var pass = document.getElementById("pw");
    if ((user.value == 'admin') && (pass.value == 123)) {
        /* <meta http-equiv="refresh" content="1; URL=www.google.com" /> */
        window.location.href='form_añadir-en.php';

        return true;
    } else {
        alert('Wrong credentials.....');
        return false;
    }
}