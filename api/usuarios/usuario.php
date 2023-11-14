<?php 
$id = $_POST["id"];
$eliminar = isset($_POST["eliminar"]) ? $_POST["eliminar"] : 0;
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : 0;
$apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : 0;
$email = isset($_POST["email"]) ? $_POST["email"] : 0;
$password = isset($_POST["password"]) ? $_POST["password"] : 0;
$direccion = isset($_POST["direccion"]) ? $_POST["direccion"] : 0;
$cargo = isset($_POST["cargo"]) ? $_POST["cargo"] : 0;



if ($eliminar == 1) {
    $sql = "DELETE FROM usuarios WHERE id = $id ";
} else {
    if ($id == 0) {
$sql = "INSERT INTO usuarios (nombre, apellido, email, password, direccion, cargo) VALUES ('$nombre', '$apellido', '$email', '$password', '$direccion', '$cargo')";
} else {
    $sql = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', email = '$email', password = '$password', direccion = '$direccion', cargo = '$cargo' WHERE id = '$id'";
}
}



$conexion = include "../../includes/conexion.php";
$q = mysqli_query($conexion, $sql);
$error = mysqli_errno($conexion);
if ($error ==  0) {
    echo json_encode(array("error" => 0));
} else {
    echo json_encode(array("error" =>$error ));
};
?>
