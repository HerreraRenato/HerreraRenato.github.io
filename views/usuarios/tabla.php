<?php if ($_SESSION["cargo"] == 1) { ?>
<a href="panel.php?route=usuario" class="btn btn-primary" >Agregar Plantel</a>
<?php } ?>
<table class="table table-bordered">
<thead>
<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cargo</th>
    <?php if ($_SESSION["cargo"] == 1) { ?>
    <th>Editar</th>
    <th>Eliminar</th>
    <?php } ?>
</tr>
</thead>
<tbody>
        <?php 
        $sql = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conexion, $sql);
        while ($fila = mysqli_fetch_array($resultado)) { ?>
        <tr>
        <td><?php echo $fila["nombre" ]?></td>
        <td><?php echo $fila["apellido" ]?></td>
        <td><?php echo $fila["cargo"]?></td>
        <?php if ($_SESSION["cargo"] == 1) { ?>
        <td><a href="panel.php?route=usuario&id=<?php echo $fila["id"] ?>">Editar</a></td>
        <td><a onclick="eliminar_jugador(<?php echo $fila["id"] ?>)" href="">Eliminar</a></td>
        <?php } ?>
    </tr>
    <?php } ?>
    
</tbody>
</table>
<script>
function eliminar_jugador(id) {
    if (!confirm("Realmente desea eliminar este usuario?")) return;
    $.ajax({
        "url":"../../api/usuarios/usuario.php",
        "type":"post",
        "dataType":"json",
        "data":{
            "id":id,
            "eliminar":1,
        },
        "success":function(r) {
        if (r.error == 0) location.reload();
        else alert("Error al eliminar");
        }
    })
}
</script>

