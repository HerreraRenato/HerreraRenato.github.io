function registrarse() {
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var direccion = $("#direccion").val();
    if(nombre == "") {
        $(".resultado").html("Falta ingresar nombre")
        return;
    } if(apellido == "") {
        $(".resultado").html("Falta ingresar apellido");
        return;
    }  if(email == "") {
        $(".resultado").html("Falta ingresar email");
        return;
    } if(password == "") {
        $(".resultado").html("Falta ingresar password");
        return;
    } if(direccion == "") {
        $(".resultado").html("Falta direccion");
        return;
    } if(nombre == "renato" && apellido == "herrera" && email == "a@a.com" && password == "123" && direccion =="123") {
        //Registro completado
        location.href = "https://youtube.com"
    } else {
        $(".resultado").html("Faltan datos por ingresar y/o no son validos")
    }
}