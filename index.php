<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login 1</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css">
    <script
src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div>
        <h1>Login</h1>
    
<form class="text-center">
    <fieldset>
        <label>Email<div><input type="email" name="Iniciar" id="email" placeholder="Ponga su email" required></div></label>
</br>
        <label>Contraseña<div><input type="password" name="password" id="password" placeholder="Ponga su contraseña" required></div></label>
</br>
        <input type="checkbox" name="registrado" id="Recordame"><span class="guardar">Quieres que tu sesion se guarde?</span>
        <a  class="Link1"href='#'>Olvido su contraseña?</a>
</br>
</br>
        <button  onclick="login()" type="button" class="btn btn-success">Iniciar Sesion</button>
<div class="alerta"></div>
    </fieldset>
</form>
</br>
<p>Sino registrate a traves del siguiente <a href="index1.php">link</a></p>
</div>
</body>
<script>
function login() {
    var email = $("#email").val();
    var password = $("#password").val();
    if (email == "") {
        $(".alerta").html("Falta ingresar email");
        return;
    }
    if (password == "") {
        $(".alerta").html("Falta ingresar passwrd");
        return;
    }

$.ajax({
    "url":"api/login.php",
    "dataType":"json",
    "type":"post",
    "data":{
        "email": email,
        "password":password,
    },
    "success":function(resultado) {
        if(resultado.error == 0) {
            location.href = "panel.php?route=inicio";
        } else {
            $(".alerta").html("Email o password incorrectas");
        }
    }
})
}
</script>
</html>



