function login() {
    var varEmail = $("#email").val();
    var varPassword = $("#password").val();
    if (varEmail == "") {
        $(".resultado").html("Falta ingresar email");
        return;
    }
    if (varPassword == "") {
        $(".resultado").html("Falta ingresar passwrd");
        return;
    }
}


