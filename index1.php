
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css">
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>
    <h1>Registrarse</h1>
    <h2>Hacelo de manera facil y rapida</h2>
    <form>
        <fieldset>
            <label>
            <div>
                <input type="name" name="nombre" id="nombre" placeholder="Nombre">
            </div>
        </label>
        <label><input type="name" name="apellido" id="apellido" placeholder="Apellido"></label>
        <div></div>
        <label>
            <div><input type="email" name="email" id="email" placeholder="Ingrese su email"></div>
        </label>
        <div></div>
        <label>
            <div><input type="password" name="password" id="password" placeholder="Ingrese su password"></div>
        </label>
        <label>
            <div><input type="text" name="direccion" id="direccion" placeholder="Escriba su direccion"></div>
        </label>
        <div>
            <button onclick="guardar()" type="button" class="btn btn-success">Registrarse!</button>
            <div class="alerta"></div>
        </div>
        </fieldset>
    </form>
    <p>Si ya tenias una cuenta, inicia sesion con este <a href="index.php">link!</a></p>
    
</body>
<script>
    function guardar() {
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var direccion = $("#direccion").val();
    if(nombre == "") {
        $(".alerta").html("Falta ingresar nombre")
        return;
    } if(apellido == "") {
        $(".alerta").html("Falta ingresar apellido");
        return;
    }  if(email == "") {
        $(".alerta").html("Falta ingresar email");
        return;
    } if(password == "") {
        $(".alerta").html("Falta ingresar password");
        return;
    } if(direccion == "") {
        $(".alerta").html("Falta direccion");
        return; 
    }
    $.ajax({
        "url":"api/registrar.php",
        "dataType":"json",
        "type":"post",
        "data":{
            "nombre": nombre,
            "apellido": apellido,
            "email": email,
            "password": password,
            "direccion": direccion,
        },
        "success":function(json) {
            if (json.error == 0) {
                location.href = "panel.php";
            } else {
            $(".alerta").html("Ocurrio un error al tomar los datos")
            }
        }
    })
}
</script>
</html>