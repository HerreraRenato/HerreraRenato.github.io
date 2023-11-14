<?php 
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$conexion = include "../includes/conexion.php";

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password' ";
$resultado = mysqli_query($conexion, $sql);

$cantidadRegistros = mysqli_num_rows($resultado);
if ($cantidadRegistros == 0) {
    echo json_encode(array(
        "error" => 1
    ));
} else {
    $res = mysqli_fetch_object($resultado);
    $_SESSION["email"] = $email;
    $_SESSION["cargo"] = $res->cargo;
    echo json_encode(array(
    "error" => 0 
    ));
}


?>