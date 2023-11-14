<?php 

$id = (!isset($_GET["id"])) ? 0 : $_GET["id"];
if ($id > 0) {
    $sql = "SELECT * FROM usuarios WHERE id = $id ";
    $q = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($q)>0) {
        $usuario = mysqli_fetch_array($q);
    }
}
?>
<div>
<div>
    <label>Nombre</label>
    <input type="text" id="nombre" value="<?php echo (isset($usuario) ? $usuario["nombre"] : "") ?>">
</div>
<div>
    <label>Apellido</label>
    <input type="text" id="apellido" value="<?php echo (isset($usuario) ? $usuario["apellido"] : "") ?>">
</div>
<div>
    <label>Email</label>
    <input type="text" id="email" value="<?php echo (isset($usuario) ? $usuario["email"] : "") ?>">
</div>
<div>
    <label>Password</label>
    <input type="password" id="password" value="<?php echo (isset($usuario) ? $usuario["password"] : "") ?>">
</div>
<div>
    <label>Direccion</label>
    <input type="text" id="direccion" value="<?php echo (isset($usuario) ? $usuario["direccion"] : "") ?>">
</div>
<div>
    <label>Cargo</label>
    <select id="cargo">
        <option <?php echo (isset($usuario) && $usuario["cargo"] == 1 ? "selected" : "" ) ?> value="1">Director Tecnico</option>
        <option <?php echo (isset($usuario) && $usuario["cargo"] == 2 ? "selected" : "" ) ?> value="2">Cuerpo Tecnico</option>
        <option <?php echo (isset($usuario) && $usuario["cargo"] == 0 ? "selected" : "" ) ?> value="0">Jugador</option>
    </select>
    
</div>
<button onclick="guardar_usuario()" class="btn btn-success">Guardar</button>
<div class="alerta"></div>
</div>
<script>
    function guardar_usuario() {
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var direccion = $("#direccion").val();
    var cargo = $("#cargo").val();
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
    } if(cargo == "") {
        $(".alerta").html("Falta ingresar el cargo");
    }
    $.ajax({
        "url":"../../api/usuarios/usuario.php",
        "type":"post",
        "dataType":"json",
        "data":{
            "id":<?php echo $id ?>,
            "nombre": nombre,
            "apellido": apellido,
            "email": email,
            "password": password,
            "direccion": direccion,
            "cargo": cargo,
        },
        "success":function(r) {
        if (r.error == 0) {
            location.href = "panel.php?route=usuarios";
        } else {
            alert("Hubo un error");
        }
        }
    })
    }
</script>
