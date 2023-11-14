<?php 
include "includes/sesion.php";
$route = (isset($_GET["route"])) ? $_GET["route"] : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="assets/bootstrap/bootstrap.bundle.js"></script>
<title>Mi panel</title>
<style>
    body {
        background-color: green;
    }
</style>
</head>
<body>
   
    <div class="row">
        <div class="col-md-3">
            <?php include "includes/menu.php" ?>
</div>
            <div class="col-md-9">
                <h1>CA 12 De Febrero</h1>
<?php   if ($route == "inicio") include "views/usuarios/inicio.php";
        else if ($route == "usuarios") include "views/usuarios/tabla.php";
        else if  ($route == "usuario") include "views/usuarios/editar.php";
        else if ($route == "cronograma") include "views/usuarios/cronograma.php";?>
    </div>
</div>   
        
    

    

</body>
</html>