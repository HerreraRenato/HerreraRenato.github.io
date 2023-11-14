<?php 
$conexion = include "../includes/conexion.php";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];
$direccion = $_POST["direccion"];

$sql = "INSERT INTO usuarios (nombre, apellido, email, password, direccion) VALUES ('$nombre', '$apellido', '$email', '$password', '$direccion')";
$q = mysqli_query($conexion, $sql);
if ($q) {
    echo json_encode(array("error" => 0));
} else {
    echo json_encode(array("error" =>1 ));
};


?>
