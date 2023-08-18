function login() {
    var email = $("#email").val();
    var password = $("#password").val();
    if(email == "") {
        $(".resultado").html("Falta ingresar email")
        return;
    } if(password == "") {
        $(".resultado").html("Falta ingresar password")
        return;
    } if(email == "a@a.com" && password == 123) {
    //Login correcto
    location.href = "https://herrerarenato.github.io/"
    } else {
        $(".resultado").html("Email o password incorrectos")
    }
}